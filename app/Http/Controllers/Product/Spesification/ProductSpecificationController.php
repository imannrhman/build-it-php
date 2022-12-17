<?php

namespace App\Http\Controllers\Product\Spesification;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductSpecificationRequest;
use App\Http\Requests\UpdateProductSpecificationRequest;
use App\Http\Resources\SpecificationResource;
use App\Models\ProductSpecification;
use App\Models\ProductSpecificationTitle;
use App\Traits\ResponseAPITraits;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ProductSpecificationController extends Controller
{
    use ResponseAPITraits;
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        try {
            $specification = ProductSpecification::all();
            return $this->responseSuccess(SpecificationResource::collection($specification));
        } catch (Exception $e) {
            return $this->responseError($e, $e->getMessage());
        }
    }

    public function get_specification_title($id)
    {
        try {
            $hashId = $this->decodeId($id);
            $specification_title = ProductSpecification::find($hashId)->first()->specificationTitles;
            return $this->responseSuccess(SpecificationResource::collection($specification_title));
        } catch (Exception $e) {
            return $this->responseError($e, $e->getMessage());
        }
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
     * @param StoreProductSpecificationRequest $request
     * @return Response
     */
    public function store(StoreProductSpecificationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param ProductSpecification $productSpecification
     * @return Response
     */
    public function show(ProductSpecification $productSpecification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProductSpecification $productSpecification
     * @return Response
     */
    public function edit(ProductSpecification $productSpecification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProductSpecificationRequest $request
     * @param ProductSpecification $productSpecification
     * @return Response
     */
    public function update(UpdateProductSpecificationRequest $request, ProductSpecification $productSpecification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProductSpecification $productSpecification
     * @return Response
     */
    public function destroy(ProductSpecification $productSpecification)
    {
        //
    }
}
