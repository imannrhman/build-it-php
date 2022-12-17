<?php

namespace App\Http\Controllers\Product\Detail;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\DetailProduct\StoreDetailProductRequest;
use App\Http\Requests\Product\DetailProduct\UpdateDetailProductRequest;
use App\Models\DetailProduct;
use Illuminate\Http\Response;

class DetailProductController extends Controller
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
     * @param StoreDetailProductRequest $request
     * @return Response
     */
    public function store(StoreDetailProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param DetailProduct $detailProduct
     * @return Response
     */
    public function show(DetailProduct $detailProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param DetailProduct $detailProduct
     * @return Response
     */
    public function edit(DetailProduct $detailProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDetailProductRequest $request
     * @param DetailProduct $detailProduct
     * @return Response
     */
    public function update(UpdateDetailProductRequest $request, DetailProduct $detailProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DetailProduct $detailProduct
     * @return Response
     */
    public function destroy(DetailProduct $detailProduct)
    {
        //
    }
}
