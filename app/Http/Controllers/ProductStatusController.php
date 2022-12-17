<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductStatusRequest;
use App\Http\Requests\UpdateProductStatusRequest;
use App\Models\ProductStatus;
use Illuminate\Http\Response;

class ProductStatusController extends Controller
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
     * @param StoreProductStatusRequest $request
     * @return Response
     */
    public function store(StoreProductStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param ProductStatus $productStatus
     * @return Response
     */
    public function show(ProductStatus $productStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProductStatus $productStatus
     * @return Response
     */
    public function edit(ProductStatus $productStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProductStatusRequest $request
     * @param ProductStatus $productStatus
     * @return Response
     */
    public function update(UpdateProductStatusRequest $request, ProductStatus $productStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProductStatus $productStatus
     * @return Response
     */
    public function destroy(ProductStatus $productStatus)
    {
        //
    }
}
