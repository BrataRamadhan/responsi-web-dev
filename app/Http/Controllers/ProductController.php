<?php

namespace App\Http\Controllers;

use App\Product;
use App\Brand;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Product::all();
        return view ('product', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori = Kategori::all();
        $brand = Brand::all();

        return view('tambahproduct', compact('kategori', 'brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name_product' => 'required',
            'kategori_id' => 'required',
            'brand_id' => 'required',
        ]);

        DB::table('product')->insert([
            'name_product' => $request->name_product,
            'kategori_id' => $request->kategori_id,
            'brand_id' => $request->brand_id,
        ]);
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kategori = Kategori::all();
        $brand = Brand::all();
        $product = Product::findorfail($id);

        return view('edit_product', compact('kategori', 'brand', 'product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::findorfail($id);

        $this->validate($request, [
            'name_product' => 'required',
            'kategori_id' => 'required',
            'brand_id' => 'required',
        ]);

        $product_data=[
            'name_product' => $request->name_product,
            'kategori_id' => $request->kategori_id,
            'brand_id' => $request->brand_id,
        ];

        $product->update($product_data);

        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = \App\Product::find($id);
        $data->delete();
        return redirect('product');
    }
}
