<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory as ModelsProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductCategory extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ModelsProductCategory::where('user_id', Auth::id())->get();
        return view('pages.category-list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $req)
    {
        $brand = $req->validate([
            'name' => [
                'string',
                'required',
                function ($attr, $val, $fail) use ($req) {
                    $exists = ModelsProductCategory::where('user_id', $req->user()->id)
                        ->where('name', $val)
                        ->exists();
                    if ($exists) {
                        $fail('Name ' . $val . ' already exists');
                    }
                }
            ]
        ]);
    
        ModelsProductCategory::create([
            'name' => $brand['name'],
            'user_id' => $req->user()->id,
        ]);
    
        return redirect()->back();
    }
    


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = ModelsProductCategory::where('user_id', Auth::id())->where('id', $id)->first();
        if (!$category) {
            abort(403, 'Unauthorized or category not found');
        }

        $category->name = $request->input('name');
        $category->save();

        return redirect()->back()->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $category = ModelsProductCategory::where('user_id', Auth::id())->where('id', $id)->first();
        if (!$category) {
            abort(403, 'Unauthorized or category not found');
        }

        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully.');
    }
}
