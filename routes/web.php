<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/panel/index', function () {
    return view('panel.index');
});
Route::get('/panel/categories/index', function () {
    $categories= DB::table('categories')->get();

    return view('panel.categories.index',compact('categories'));
});
Route::post('/panel/categories/store', function (Request $request) {
    $request->validate([
        'title'=> 'required|string',
        'image'=> 'required|image'
    ]);


    $targetDir = "assets/img/";
    $image = $request->file("image");

    $path = $targetDir.basename($image->getClientOriginalName()) ;



$image->move($targetDir ,$image->getClientOriginalName());


DB::table('categories')->insert([
    'title' => $request->title,
    'image' => $path
]);
return redirect('/panel/categories/index');


})->name('category.store');




Route::get('/panel/categories/delete/{id}', function ($id) {
DB::table('categories')->where('category_id', $id)->delete();
return redirect('/panel/categories/index');


})->name('category.delete');

