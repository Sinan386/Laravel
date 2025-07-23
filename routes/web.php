<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;


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

                                                       
                                                