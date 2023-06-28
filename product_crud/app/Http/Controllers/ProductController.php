<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    public function get_all_product()
    {
        $products = Product::all();

        return response()->json(["products" => $products], 200);
    }

    public function add_product(Request $request)
    {
        $product_data["name"] = $request->name;
        $product_data["description"] = $request->description;
        if ($request->photo != "") {
            $strpos = strpos($request->photo, ";");
            $sub = substr($request->photo, 0, $strpos);
            $ex = explode("/", $sub)[1];
            $name = time() . "." . $ex;
            $img = Image::make($request->photo)->resize(200, 200);
            $upload_path = public_path()."/upload/";
            $img->save($upload_path.$name);

            $product_data["photo"] = $name;
        } else {
            $product_data["photo"] = "image.png";
        }
        $product_data["type"] = $request->type;
        $product_data["quantity"] = $request->quantity;
        $product_data["price"] = $request->price;

        $product = Product::create($product_data);

        
    }
}
