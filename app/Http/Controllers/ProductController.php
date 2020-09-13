<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct() {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $products = Product::all();

        return view('shop.index', compact('products'));
    }

    public function AddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart',$cart);
       
        return redirect('/index');       
    }

    public function getCart()
    {
        if (!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');

        $cart = new Cart($oldCart);

        return view('shop.shopping-cart',['products' => $cart->items, 'totalPrice' => $cart->totalPrice ]);
    }

    public function getCheckOut(){
        if (!Session::has('cart')){
            return view('shop.shopping-cart');
     
        }
        $oldCart = session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;

        return view('shop.checkout', ['total' => $total]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
}
