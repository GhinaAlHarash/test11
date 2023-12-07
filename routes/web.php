<?php

use App\Http\Controllers\postsCon;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('hi',function (){
    $me="what";
   return view('hi',compact('me'));
});
/*Route::controller(post_controller::class)->group(function (){
    Route::get('posts','show');
    Route::get('posts/when','date');
    Route::get('posts/name','name');
});*/
//Route::resource('posts',postsCon::class);
