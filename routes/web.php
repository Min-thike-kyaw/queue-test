<?php

use App\Models\Post;
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
    return view('welcome');
});
Route::get('/post-create', function(){
    Post::create(['title'=> 'Hello', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, architecto? Commodi, labore nisi quae ratione perferendis quibusdam! Sequi nobis qui temporibus quis similique repellendus quod, exercitationem fugiat corrupti corporis aliquid!']);
    dd("hello");
});
