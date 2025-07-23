<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TotoController;


Route::get('/', function () {
    return view('home');
});

Route::get('/product', [ProductController:: class, 'product']);//function () { //
    //return 'Liste des produits !';
//});

Route::get('/product/{id}', [ProductController::class, 'detailProduct']); //function (string $id) {
                            //return "product $id"; // où return 'product '.$id;
//});

Route::get('/cart', [CartController::class, 'cart']); //function () {
                                                       // return 'Panier'; });

                                                    
Route::get('/toto/id/{id}', [TotoController:: class, 'toto' ]); //, function() {
                                                                //$tableau = ['id' => 42 , 'name' => "tableau"];
                                                                //return view ('tata', $tableau);
                                                                //});