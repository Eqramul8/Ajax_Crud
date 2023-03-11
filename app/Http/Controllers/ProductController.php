<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function addProduct(Request $request)
    {

        $data = new Product();
        $data->name = $request->name;
        $data->price = $request->price;
        $data->save();
        return response()->json([
            'status' => 'success',

        ]);

    }

    //view product
    public function products()
    {
        $products = Product::latest()->paginate(8);
        return view('product', compact(['products']));
    }

    //update product
    public function updateProduct(Request $request)
    {

        Product::where('id', $request->up_id)->update([
            'name' => $request->up_name,
            'price' => $request->up_price,
        ]);

        return response()->json([
            'status' => 'success',

        ]);

    }



    public function deleteProduct(Request $request)
    {
        Product::find($request->product_id)->delete();

        return response()->json([
            'status' => 'success',

        ]);

    }
    

}
