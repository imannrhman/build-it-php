<?php

namespace App\Http\Controllers\Product\Spesification;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductSpecificationValueRequest;
use App\Http\Requests\UpdateProductSpecificationValueRequest;
use App\Models\ProductSpecificationValue;
use Illuminate\Http\Response;

class ProductSpecificationValueController extends Controller
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
     * @param StoreProductSpecificationValueRequest $request
     * @return Response
     */
    public function store(StoreProductSpecificationValueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param ProductSpecificationValue $productSpecificationValue
     * @return Response
     */
    public function show(ProductSpecificationValue $productSpecificationValue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProductSpecificationValue $productSpecificationValue
     * @return Response
     */
    public function edit(ProductSpecificationValue $productSpecificationValue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProductSpecificationValueRequest $request
     * @param ProductSpecificationValue $productSpecificationValue
     * @return Response
     */
    public function update(UpdateProductSpecificationValueRequest $request, ProductSpecificationValue $productSpecificationValue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProductSpecificationValue $productSpecificationValue
     * @return Response
     */
    public function destroy(ProductSpecificationValue $productSpecificationValue)
    {
        //
    }
}
