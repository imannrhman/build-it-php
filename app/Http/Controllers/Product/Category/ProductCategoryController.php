<?php

namespace App\Http\Controllers\Product\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Category\StoreProductCategoryRequest;
use App\Http\Requests\Product\Category\UpdateProductCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\ProductCategory;
use App\Models\SubCategory;
use App\Traits\ResponseAPITraits;
use Hashids\Hashids;
use Illuminate\Http\Response;

class ProductCategoryController extends Controller
{
    use ResponseAPITraits;


    public function __construct()
    {
        $this->middleware('auth:api')->except('index', 'get_sub_categories');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $categories = ProductCategory::all();
            return $this->responseSuccess(CategoryResource::collection($categories));
        } catch (\Exception $e) {
            return $this->responseError($e->getTraceAsString(), 500);
        }
    }

    public function get_sub_categories($id)
    {
        try {
            $id_hashed = $this->decodeId($id);
            $sub_category = SubCategory::where('category_id', $id_hashed)->get();
            return $this->responseSuccess(CategoryResource::collection($sub_category));
        } catch (\Exception $e) {
            return $this->responseError($e->getTraceAsString(), 500);
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
     * @param StoreProductCategoryRequest $request
     * @return Response
     */
    public function store(StoreProductCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param ProductCategory $productCategory
     * @return Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProductCategory $productCategory
     * @return Response
     */
    public function edit(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProductCategoryRequest $request
     * @param ProductCategory $productCategory
     * @return Response
     */
    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProductCategory $productCategory
     * @return Response
     */
    public function destroy(ProductCategory $productCategory)
    {
        //
    }
}
