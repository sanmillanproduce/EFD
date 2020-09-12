<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;




use App\Classification;
use App\Subclassification;
use App\Subarea;
use App\Kit;
use App\Product;
use App\Name;

class CartController extends Controller
{

    public function __construct() {

        if (!\Session::has('cart'))\Session::put('cart', array());
    }

    // Show Cart
    public function show() {
       
        $clasificaciones = DB::table('classifications')->get();
        $subclasificaciones = DB::table('subclassifications')->get();

        $clasificaciones1 = DB::table('classifications')->where('id', $id)->get();
        $subclasificaciones1 = DB::table('subclassifications')->where('id', $id)->get();
        $subareas = Subarea::where('subclassification_id', $id)->get();
        $product = Kit::where('id', $id)->first();

        $kits = DB::table('kits')->get();
        $productos = DB::table('products')->get();
        $names = DB::table('names')->get();
        $incluidos = DB::table('kit_products')->get();
        $extras = DB::table('kit_products')->where('type', 'EXTRA')->get();
        $cart = \Session::get('cart');
        $total = $this->total();

        return view('market.car', compact('cart', 'total', 'clasificaciones', 'subclasificaciones' , 'clasificaciones1', 'subclasificaciones1' , 'subareas', 'kits',  'productos', 'names', 'incluidos', 'product', 'extras'));
    }

    // Add Item
    public function add(Product $product) {

        $cart = \Session::get('cart');
        $product->quantity = 1;
        $product->day = 1;
        $cart[$product->id] = $product;
        \Session::put('cart', $cart);

        sleep(5);
        return \App::make('redirect')->back();



    }

    // Delete Item
    public function delete(Product $product) {

        $cart = \Session::get('cart');
        unset($cart[$product->id]);
        \Session::put('cart', $cart);

        return redirect()->route('cart-show')   ;
    }

    // Update Item
    public function update(Product $product, $quantity) {

        $cart = \Session::get('cart');
        $cart[$product->id]->quantity = $quantity;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show')   ;
    }

    // Trash Item
    public function total() {


    }


}
