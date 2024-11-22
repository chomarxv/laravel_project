<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Orders;
use App\Models\Users;
use Illuminate\Http\Request;
class WebController extends Controller
{

public function index()
{
    return view('web.index');
}

public function master()
{
    return view('web.webmaster');
}

public function shop()
{
    $products= Products::all();
    return view('web.shop',['productsv'=> $products]);
}

public function cart($id)
{
    $product = Products::findorfail($id);
    $cart = session()->get('cart');

    if(isset($cart[$id]))
    {
        // echo("product with id:  $id already exists ");
        $cart[$id]['quantity']++;
    }
    else
    {
        // echo("product with id: $id added to cart");
        $cart[$id] = [
            "name" => $product->name,
            "price" => $product->price,
            "image" => $product->image,
            "quantity" => 1,
        ];
    }

    session()->put('cart', $cart);

    return redirect()->back();
}





 public function carttt()
{

    return view('web.cart');
}

public function wwww($id)
    {
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
             unset($cart[$id]);
            // session()->flush();
             //session()->forget('cart');
            session()->put('cart', $cart);

        }
         session()->flash('success', "Product removed successfully");
        return view ('web.cart');
    }


public function placedorder(Request $request)
{
$cart = session()->get('cart');
$total=0;
foreach ($cart as $id => $details)
{
$total+= $details['price']*$details['quantity'];
$totalwithtax=$total+($total*18)/100;
}
$order = new Orders();
$order ->firstname = $request->firstname;
$order ->lastname = $request->lastname;
$order ->email = $request->email;
$order ->mobile = $request->mobile;
$order ->address = $request->address;
$order ->country = $request->country;
$order ->city = $request->city;
$order ->zipcode = $request->zipcode;
$order ->totalwithtax =$totalwithtax;
$order->save();

session()->forget('cart');
return redirect()->route('windex');
}

public function checkout()
 {


    return view('web.checkout');
 }

}
