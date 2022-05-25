<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartsRequest;
use App\Models\CartProducts;
use App\Models\Carts;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(CartsRequest $request)
    {
        $data=$request->validated();
        $data['with_cartProducts']=1;
        $data['with_user']=1;
        $data=Carts::query()->applyAllFilters($data);
        $data->isEmpty() ? throw new ModelNotFoundException() : null  ;
        return self::getJsonResponse('success',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CartsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CartsRequest $request)
    {
        $data = $request->validated();
        $cart = Carts::query()->create($data);
        $cart->cartProducts()->createMany($data['products']);
        $cart["cart_products"] = $cart->cartProducts;
        return self::getJsonResponse('success', $cart);
    }

    /**
     * Display the specified resource.
     * @param CartsRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(CartsRequest $request, $id)
    {
        $data = $request->validated();
        $data['where_id']=$id;
        $data['with_cartProducts']=1;
        $cart = Carts::query()->applyAllFilters($data)->first();
        $cart ?? throw new ModelNotFoundException();
//        $cart['cart_products']=$cart->cartProducts;
        return self::getJsonResponse('success',$cart);


    }


    /**
     * Update the specified resource in storage.
     *
     * @param CartsRequest $request
     * @param    $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CartsRequest $request, $id)
    {
        $cart = Carts::query()->where('id', $id)->firstOrFail();
        $data = $request->validated();
        foreach ($data['products'] as $product) {
            if ($product['quantity'] == 0) {
                $demo = CartProducts::query()->where('product_id', $product['product_id'])->where('cart_id', $id)->first();

            }
            CartProducts::query()->updateOrCreate(['product_id' => $product['product_id'], 'cart_id' => $id], ['quantity' => $product['quantity']]);
            $cart->cartProducts()->each(function ($comment) {
                if ($comment->quantity == 0) {
                    $comment->delete();
                }
            });

        }
        $cart['cart_products'] = $cart->cartProducts;
        return self::getJsonResponse('success', $cart);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Carts $carts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carts $carts)
    {
        //
    }
}
