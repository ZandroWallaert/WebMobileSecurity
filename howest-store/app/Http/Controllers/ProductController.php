<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    function index(Request $request)
    {
        return view("products.index", [
            "products" => Product::all(),
            "cart" => $request->session()->get("cart")]);
    }

    function show(Request $request, $id)
    {
        return view("products.show", [
            "product" => Product::find($id),
            "cart" => $request->session()->get("cart")]);
    }

    function addToCart(Request $request)
    {
        $cart = $request->session()->get("cart");

        if ($cart == null) {
            $cart = [];
        }

        $prod = Product::find($request->input("code"));

        $cart[] = $prod;

        $request->session()->put("cart", $cart);

        return redirect("./products/");
    }
}
