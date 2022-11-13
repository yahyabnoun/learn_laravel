<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome',
    [
        'produit' => 'salade',
        'animals' =>['chien', 'chat', 'cheval'],
        'posts' =>[
            [
            'id'=> 1,
            'title'=> 'post title 1',
            'body'=> 'post body 1',
        ],
        [
            'id'=> 2,
            'title'=> 'post title 2',
            'body'=> 'post body 2',
        ],
        [
            'id'=> 3,
            'title'=> 'post title 3',
            'body'=> 'post body 3',
        ]]
]);
});

// Route::get('/Home/{name?}',[HomeController::class,'index']);


Route::get('/Home',[HomeController::class,'index']);
