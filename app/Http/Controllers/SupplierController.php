<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Models\Supplier;
use App\Models\SupplierBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        $suppliers = $req->user()->suppliers;
        return view("pages.dashboard.supplier", ['suppliers' => $suppliers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateSupplierRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $request->file('image')->store('suppliers', 'public');
            $data['image'] = $imagePath;
        }
        $brand = SupplierBrand::create([
            "name" => $data['brand'],
        ]);
        Supplier::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'image' => $data['image'],
            'brand_id' => $brand->id,
            "user_id" => $request->user()->id,
        ]);

        return redirect()->back()->with("supplier_with_brand", true);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateSupplierRequest $request)
    {
        $data = $request->validated();
        if ($request->has("brand")) {

        } else {
            Supplier::create([
                 ...$data,
                'user_id' => Auth::user()->id,
                "brand_id" => "1",
            ]);
        };
        return redirect()->back()->with("supplier", true);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $supplier = Auth::user()->suppliers()->find($id);
        if (!$supplier) {
            abort(404, 'Supplier not found!');
        };
        return response()->json(['supplier' => $supplier]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupplierRequest $request, string $id)
    {
        $data = $request->validated();
        $supplier = Auth::user()->suppliers()->find($id);
        if (!$supplier) {
            abort(404, 'Supplier not found!');
        }

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            if ($supplier->image && Storage::disk('public')->exists($supplier->image)) {
                Storage::disk('public')->delete($supplier->image);
            }

            $imagePath = $request->file('image')->store('suppliers', 'public');
            $data['image'] = $imagePath;
        } else {
            $data['image'] = $supplier->image;
        }

        if ($supplier->brand && $supplier->brand->name !== $data['brand']) {
            $brand = SupplierBrand::firstOrCreate(['name' => $data['brand']]);
            $data['brand_id'] = $brand->id;
        } else if (!$supplier->brand) {
            $brand = SupplierBrand::firstOrCreate(['name' => $data['brand']]);
            $data['brand_id'] = $brand->id;
        } else {
            $data['brand_id'] = $supplier->brand->id;
        }

        $supplier->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'image' => $data['image'],
            'brand_id' => $data['brand_id'],
        ]);

        return redirect()->back()->with('updated_supplier', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req)
    {

        $id = $req->validate(['id' => 'required|string'])['id'];

        $supplier = Auth::user()->suppliers()->find($id);

        if (!$supplier) {
            abort(404, 'Supplier not found');
        }

        if ($supplier->image && Storage::exists($supplier->image)) {
            Storage::delete($supplier->image);
        }

        $supplier->delete();

        return redirect()->back()->with('deleted_supplier', true);
    }

}
