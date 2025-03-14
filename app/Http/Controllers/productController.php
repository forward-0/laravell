<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function store(Request $request){
        $request->validate([
            "title"=> "string|required",
            "product_detail"=> "string|required",
            "category"=> "required|integer",
            "qty"=> "required|integer",
            "price"=> "required|integer",
            "image"=>"required|image"


            ]);
            $targetDir = "assets/img/";
            $image = $request->file("image");
            $image->move($targetDir, $image->getClientOriginalName());
            $path =$targetDir.$image->getClientOriginalName();

            DB::table("products")->insert([
                "product_name"=> $request->title,
            "product_detail"=> $request->product_detail,
            "category_id"=> $request->category,
            "product_qty"=> $request->qty,
            "product_price"=> $request->price,
            "product_image"=>$path

                ]);
                return redirect('/panel/products/index');
    }
    public function delete($id){

        DB::table('products')->where('product_id', $id)->delete();
        return redirect('/panel/products/index');


        }
        public function edit($id){
            $product = DB::table('products')->where('product_id', $id)->first();
            $categories= DB::table('categories')->get();
            return view('panel.products.edit',compact('product','categories')); 
        }
        public function update(Request $request , $id){
            $request->validate([
                "title_edit"=> "string",
                "image_edit"=> "image"

                ]);
                if($request->hasFile("image_edit")){
                $targetDir = "assets/img/";
                $image = $request->file("image_edit");
                $image->move($targetDir, $image->getClientOriginalName());
                $path =$targetDir.$image->getClientOriginalName();

                DB::table("categories")->where('category_id' ,$id)->update([
                    "title"=> $request->title_edit,
                    "image"=> $path
                    ]);
                }else{
                    DB::table("categories")->where('category_id' ,$id)->update([
                        "title"=> $request->title_edit,

                        ]);
                        }
                    return redirect('/panel/categories/index');
        }
}
