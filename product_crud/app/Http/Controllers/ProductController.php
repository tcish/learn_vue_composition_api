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
            $upload_path = public_path() . "/upload/";
            $img->save($upload_path . $name);

            $product_data["photo"] = $name;
        } else {
            $product_data["photo"] = "image.png";
        }
        $product_data["type"] = $request->type;
        $product_data["quantity"] = $request->quantity;
        $product_data["price"] = $request->price;

        $product = Product::create($product_data);
    }

    public function get_edit_product($id)
    {
        $product = Product::find($id);

        return response()->json(["product" => $product], 200);
    }

    public function update_product(Request $request, $id)
    {
        $product = Product::find($id);

        $product_data["name"] = $request->name;
        $product_data["description"] = $request->description;

        if ($product->photo != $request->photo) {
            $strpos = strpos($request->photo, ";");
            $sub = substr($request->photo, 0, $strpos);
            $ex = explode("/", $sub)[1];
            $name = time() . "." . $ex;

            $img = Image::make($request->photo)->resize(200, 200);
            $upload_path = public_path() . "/upload/";
            $image = $upload_path . $product->photo;
            $img->save($upload_path . $name);
            if (file_exists($image)) {
                @unlink($image);
            }

            $product_data["photo"] = $name;
        } else {
            $product_data["photo"] = $product->photo;
        }

        $product_data["type"] = $request->type;
        $product_data["quantity"] = $request->quantity;
        $product_data["price"] = $request->price;

        Product::where("id", $id)->update($product_data);
    }

    public function delete_product($id)
    {
        $product = Product::findOrFail($id);
        $image_path = public_path() . "/upload/";
        $image = $image_path.$product->photo;
        if (file_exists($image)) {
            @unlink($image);
        }
        $product->delete();
    }
}
