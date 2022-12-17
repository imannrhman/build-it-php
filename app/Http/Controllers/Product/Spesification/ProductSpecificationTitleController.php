<?php

namespace App\Http\Controllers\Product\Spesification;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductSpecificationTitleRequest;
use App\Http\Requests\UpdateProductSpecificationTitleRequest;
use App\Models\ProductSpecificationTitle;

class ProductSpecificationTitleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreProductSpecificationTitleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductSpecificationTitleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductSpecificationTitle  $productSpecificationTitle
     * @return \Illuminate\Http\Response
     */
    public function show(ProductSpecificationTitle $productSpecificationTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductSpecificationTitle  $productSpecificationTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductSpecificationTitle $productSpecificationTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductSpecificationTitleRequest  $request
     * @param  \App\Models\ProductSpecificationTitle  $productSpecificationTitle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductSpecificationTitleRequest $request, ProductSpecificationTitle $productSpecificationTitle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductSpecificationTitle  $productSpecificationTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductSpecificationTitle $productSpecificationTitle)
    {
        //
    }
}
