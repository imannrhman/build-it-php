<?php

namespace App\Http\Controllers\Transaction\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::where('user_id', auth()->user()->id);
        return $this->responseSuccess($cart->get()->first()->products, "Berhasil");
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
     * @param \App\Http\Requests\StoreCartRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartRequest $request)
    {
        $cart_active = auth('api')->user()->cart()->where('active', true);

        if ($cart_active->first()) {

            //
            return $this->responseSuccess([], 200);
        } else {

            $id = $this->decodeId($request->product_id);
            $product = Product::find($id);

            if($product) {
                $cart = new Cart();
                $cart->active = true;
                $cart->total_qty += $request->qty;
                $cart->user()->associate(auth('api')->user());
                $cart->save();
                $cart->refresh();
                $cart->products()->attach([$product->first()->id], ['qty' => $request->qty]);


                return $this->responseSuccess($cart, "Berhasil Menambahkan Cart", 200);
            } else {
                return $this->responseError([], "Product Not Found", 404);
            }
        }


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateCartRequest $request
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
