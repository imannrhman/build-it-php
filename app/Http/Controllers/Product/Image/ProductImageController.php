<?php

namespace App\Http\Controllers\Product\Image;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductImageRequest;
use App\Http\Requests\UpdateProductImageRequest;
use App\Models\ProductImage;
use Illuminate\Http\Response;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProductImageRequest $request
     * @return Response
     */
    public function store(StoreProductImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param ProductImage $productImage
     * @return Response
     */
    public function show(ProductImage $productImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProductImage $productImage
     * @return Response
     */
    public function edit(ProductImage $productImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProductImageRequest $request
     * @param ProductImage $productImage
     * @return Response
     */
    public function update(UpdateProductImageRequest $request, ProductImage $productImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProductImage $productImage
     * @return Response
     */
    public function destroy(ProductImage $productImage)
    {
        //
    }
}
