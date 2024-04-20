<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Exception;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $product = Product::paginate(10);

            return response()->json([
                "success" => true,
                "data" => $product
            ], 200);
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            return response()->json([
                "error" => $errorMessage
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        try {
            $productData = $request->validated();
            $product = Product::create($productData);

            return  response()->json(['data' => $product], 200);
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            return response()->json(['error' => $errorMessage], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($product)
    {
        try {
            $productData = Product::find($product);

            if (empty($productData)) {
                return response()->json([
                    'success' => false,
                    'data' => 'not found!'
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => $productData
            ], 200);
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            return response()->json(['message' => $errorMessage], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, $product)
    {
        try {
            $productData = Product::find($product);

            if (empty($productData)) {
                return response()->json([
                    'success' => false,
                    'data' => "not found!"
                ], 404);
            }

            $updateData = $request->validated();
            Product::updataOrCreate($updateData);

            return response()->json([
                "success" => true,
                "message" => "Product updated"
            ], 200);
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            return response()->json([
                "error" => $errorMessage
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product)
    {
        try {
            $productData = Product::find($product);

            if (empty($productData)) {
                return response()->json([
                    "success" => false,
                    "data" => "not found"
                ], 404);
            }

            $productData->delete();
            return response()->json([
                "success" => false,
                "data" => "Product deleted"
            ], 200);
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            return response()->json([
                'error' => $errorMessage
            ], 500);
        }
    }
}
