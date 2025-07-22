<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function () {
    return 'Liste des produits !';
});

Route::get('/product/{id}', function (string $id) {
    return "product $id"; // où return 'product '.$id;
});

Route::get('/cart', function () {
    return 'Panier';
});