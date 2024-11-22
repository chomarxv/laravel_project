<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Products;
class AdminController extends Controller
{

public function addproduct()
{
    return view('admin.AddProduct');
}
public function index()
{$products = Products::all();
    return view('admin.index',['products' => $products]);
}
public function store(Request $request)
{
    $product= new Products();
    $product->name= $request->name;
    $product->description= $request->description;
    $product->price= $request->price;
    $product->image= $request->image;
    $product-> save();
    return redirect()->route('aindex');
}
public function deleteproduct($id)
{
    $product = Products::findorFail($id);
    $product->delete();
    return redirect()->route('aindex');
}
public function editproduct($id)
{
    $product = Products::findorFail($id);

    return view('admin.Editproduct', compact('product'));


}
public function edited($id,Request $request)
{
    $product = Products::findorFail($id);
    $product->name= $request->input('name');
    $product->description= $request->input('description');
    $product->price= $request->input('price');
    // $product->image= $request->input('image');
    $product-> save();
    return redirect()->route('aindex');

}
}
