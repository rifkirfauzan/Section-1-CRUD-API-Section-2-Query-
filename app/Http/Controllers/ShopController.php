<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{    
   
    public function index()
    {
        
        $shops = Shop::latest()->get();

        
        return response()->json([
            'success' => true,
            'message' => 'List data shop',
            'data'    => $shops
        ], 200);

    }
    
   
    public function show($id)
    {
        $shop = Shop::findOrfail($id);
        return response()->json([
            'success' => true,
            'message' => 'List detail data shop',
            'data'    => $shop
        ], 200);

    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name'   => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $shop = Shop::create([
            'name'     => $request->name,
        ]);

        if($shop) {

            return response()->json([
                'success' => true,
                'message' => 'Shop data has been save!',
                'data'    => $shop
            ], 201);

        } 

        return response()->json([
            'success' => false,
            'message' => 'Shop data not been saved!',
        ], 409);

    }
    
    public function update(Request $request, Shop $shop)
    {
        $validator = Validator::make($request->all(), [
            'name'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $shop = Shop::findOrFail($shop->id);

        if($shop) {

            $shop->update([
            'name'     => $request->name,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'List data shop success updated!',
                'data'    => $shop
            ], 200);

        }

        return response()->json([
            'success' => false,
            'message' => 'List data shop not yet!',
        ], 404);

    }
    
    public function destroy($id)
    {
        $shop = Shop::findOrfail($id);

        if($shop) {

            $shop->delete();

            return response()->json([
                'success' => true,
                'message' => 'List data shop has been deleted!',
            ], 200);

        }

        return response()->json([
            'success' => false,
            'message' => 'List data shop not yet!',
        ], 404);
    }
}