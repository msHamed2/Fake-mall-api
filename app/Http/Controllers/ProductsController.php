<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Models\Products;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(ProductsRequest $request)
    {
        $data = $request->validated();
        $data = Products::query()->applyAllFilters($data);
        $data->isEmpty() ? throw new ModelNotFoundException() : null  ;

        return self::getJsonResponse('success', $data);

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request): JsonResponse
    {
        $data = $request->validated();
        $data['rating'] = 0;
        $data['count'] = 0;
        $data = Products::query()->create($data);

        return self::getJsonResponse('success', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param ProductsRequest $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(ProductsRequest $request, $id): JsonResponse
    {
        $data = $request->validated();
        $data['where_id'] = $id;
        $product = Products::query()->applyAllFilters($data)->first();
        $product ?? throw new ModelNotFoundException();
        return self::getJsonResponse('success', $product);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param ProductsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ProductsRequest $request, $id)
    {
        $product = Products::query()->where('id', $id)->firstOrFail();
        $data = $request->validated();
        if (array_key_exists('rate', $data)) {
            $count = $product->count;
            $rate = $product->rating * $count;
            $count = $count + 1;
            $rate = $rate + $request->rating;
            $data['rating'] = number_format($rate / $count, 2);
            $data['count'] = $count;


        }

        $product->update($data);
        return self::getJsonResponse('success', $product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Products $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }

    public function rate(Request $request, $product)
    {
        $data = $request->validate(
            ['rating' => "numeric|required|max:5|min:1"]
        );
        $product = Products::query()->where('id', $product)->firstOrFail();


        $count = $product->count;
        $rate = $product->rating * $count;
        $count = $count + 1;
        $rate = $rate + $request->rating;
        $data['rating'] = number_format($rate / $count, 2);
        $data['count'] = $count;


        $product->update($data);
        return self::getJsonResponse('success', $product);
    }
    public function categories(){
       $category= Products::query()->pluck('category')->all();
       $data=array_unique($category);

        return self::getJsonResponse('success', $data);
    }

}
