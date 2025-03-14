<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    public function store(Request $request){
        $request->validate([
            "title"=> "string|required",
            "image"=>"required|image"
            ]);
            $targetDir = "assets/img/";
            $image = $request->file("image");
            $image->move($targetDir, $image->getClientOriginalName());
            $path =$targetDir.$image->getClientOriginalName();

            DB::table("categories")->insert([
                "title"=> $request->title,
                "image"=> $path
                ]);
                return redirect('/panel/categories/index');
    }
    public function delete($id){

            DB::table('categories')->where('category_id', $id)->delete();
            return redirect('/panel/categories/index');


            }
            public function edit($id){
                $category = DB::table('categories')->where('category_id', $id)->first();
                return view('panel.categories.edit',compact('category'));
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
            public function selectAll(){
                $categories = DB::table('categories')->get();
                
                return view('index',compact('categories'));
            }
}
