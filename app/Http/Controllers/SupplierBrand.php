<?php

namespace App\Http\Controllers;

use App\Models\SupplierBrand as ModelsSupplierBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierBrand extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands=ModelsSupplierBrand::where("user_id", Auth::id())->get();;
        return view('pages.brand-list',['brands'=>$brands]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $brand = $req->validate(['name' => ['string', 'required', function ($attr, $val, $fail) {
            $brand = ModelsSupplierBrand::where('user_id', Auth::user()->id)->where('name', $val)->exists();
            if ($brand) {
                $fail('Name ' . $val . ' already exists');
            };
        }]]);
         ModelsSupplierBrand::create([
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
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
        ]);

        $brand = ModelsSupplierBrand::where('user_id', Auth::id())
            ->where('id', $id)
            ->first();
        if (!$brand) {
            abort(403, 'Unauthorized or brand not found');
        }
        $brand->name = $request->input('brand');
        $brand->save();
        return redirect()->back()->with('success', 'Brand updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req)
    {
        $id = $req->input('id');
        $brand = ModelsSupplierBrand::where('user_id', Auth::id())
            ->where('id', $id)
            ->first();

        if (!$brand) {
            abort(403, 'Unauthorized or brand not found');
        }

        $brand->delete();
        return redirect()->back()->with('success', 'Brand deleted successfully.');
    }

}
