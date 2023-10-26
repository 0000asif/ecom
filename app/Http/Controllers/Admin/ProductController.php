<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    function index()
    {
        $s['products'] = product::all();
        return view('admin.product.index', $s);
    }
    function create()
    {
        return view('admin.product.create');
    }
    function store(Request $req)
    {
        $product = new product();

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $path = $image->store('product', 'public');
            $product->image = $path;
        }
        $product->name = $req->name;
        $product->descriptioin = $req->description;
        $product->save();
        return redirect()->route('product.index');
    }
    function edit($id)
    {
        $s['product'] = product::findOrFail($id);
        return view('admin.product.edit', $s);
    }
    function update(Request $req, $id)
    {
        $product = product::findOrFail($id);

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $path = $image->store('product', 'public');
            $this->fileDelete($product->image);
            $product->image = $path;
        }
        $product->name = $req->name;
        $product->descriptioin = $req->description;
        $product->update();
        return redirect()->route('product.index');
    }
    function delete($id){
        $product = product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }
    function view($id){
        $s ['product'] = product::findOrFail($id);
        return view('admin.product.view',$s);
    }
}
