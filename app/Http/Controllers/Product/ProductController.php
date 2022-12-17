<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Product\StoreProductRequest;
use App\Http\Requests\Product\Product\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSpecificationValue;
use App\Models\Store;
use App\Models\SubCategory;
use Exception;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except('index');
    }


    public function index(): JsonResponse
    {
        try {
            $product = Product::all();

            return $this->responseSuccess(ProductResource::collection($product),);
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
     * @param StoreProductRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreProductRequest $request)
    {
        try {
            $product = new Product();
            $product->sku = $request->sku;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->minimum_order = $request->minimum_order;
            $product->stock = $request->stock;
            $product->description = $request->description;
            $product->brand = $request->brand;
            $product->save();


            $store_id = 1;
            $store = Store::find($store_id);
            $product->store()->associate($store);
            $product->save();


            $sub_category_id = $this->decodeId($request->category);
            $sub_category = SubCategory::find($sub_category_id)->first();
            $product->sub_categories()->associate($sub_category->id);
            $product->save();
            $product->refresh();


            if($request->images) {
                $list_image = [];

                foreach ($request->file('images') as $image) {
                    $productImage = new ProductImage();
                    $result = $image->storeOnCloudinaryAs("product/". $this->encodeId(1), "". $product->name ."_". now()->timestamp);
                    $productImage->image_url = $result->getSecurePath();
                    $productImage->save();
                    $productImage->refresh();
                    $list_image[] = $productImage;
                }


                $product->images()->saveMany($list_image);
                $product->save();
                $product->refresh();
            }


            if ($request->spesifications) {
                $list_value_id = [];
                foreach ($request->spesifications as $specification) {
                    $specification_value = new ProductSpecificationValue();
                    $specification_value->name =  $specification['value'];
                    $specification_value->specification_title_id =  $this->decodeId($specification['id'])[0];
                    $specification_value->save();
                    $list_value_id[] = $specification_value->id;
                }


                $product->spesifications_value()->attach($list_value_id);
                $product->save();
            }

            $product->refresh();
            return $this->responseSuccess(new ProductResource($product), "Berhasil menambah product", 201);
        } catch (Exception $e) {
            return $this->responseError($e->getTrace(), $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProductRequest $request
     * @param Product $product
     * @return Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
