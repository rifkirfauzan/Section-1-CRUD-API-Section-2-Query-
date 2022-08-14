<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{    
   
    public function index()
    {
        
        $product = Product::latest()->get();

        
        return response()->json([
            'success' => true,
            'message' => 'List data product',
            'data'    => $product
        ], 200);

    }
    
   
    public function show($id)
    {
        $product = Product::findOrfail($id);
        return response()->json([
            'success' => true,
            'message' => 'List detail data product',
            'data'    => $product
        ], 200);

    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'item_name'   => 'required',
            'quantity'   => 'required',
            'total_cost_of_goods_sold'   => 'required',
            'total_price_sold'   => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $product = Product::create([
            'item_name'     => $request->item_name,
            'quantity'     => $request->quantity,
            'total_cost_of_goods_sold'     => $request->total_cost_of_goods_sold,
            'total_price_sold'     => $request->total_price_sold,
        ]);

        if($product) {

            return response()->json([
                'success' => true,
                'message' => 'Product data has been save!',
                'data'    => $product
            ], 201);

        } 

        return response()->json([
            'success' => false,
            'message' => 'Product data not been saved!',
        ], 409);

    }
    
    public function update(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            'item_name'   => 'required',
            'quantity'   => 'required',
            'total_cost_of_goods_sold'   => 'required',
            'total_price_sold'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $product = Product::findOrFail($product->id);

        if($product) {

            $product->update([
                'item_name'     => $request->item_name,
                'quantity'     => $request->quantity,
                'total_cost_of_goods_sold'     => $request->total_cost_of_goods_sold,
                'total_price_sold'     => $request->total_price_sold,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'List data product success updated!',
                'data'    => $product
            ], 200);

        }

        return response()->json([
            'success' => false,
            'message' => 'List data product not yet!',
        ], 404);

    }
    
    public function destroy($id)
    {
        $product = Product::findOrfail($id);

        if($product) {

            $product->delete();

            return response()->json([
                'success' => true,
                'message' => 'List data product has been deleted!',
            ], 200);

        }

        return response()->json([
            'success' => false,
            'message' => 'List data product not yet!',
        ], 404);
    }
}