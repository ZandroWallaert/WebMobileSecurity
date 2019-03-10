<?php
Route::get("/", "ProductController@index");
Route::get("/products", "ProductController@index");
Route::get("/products/{id}", "ProductController@show")->name("products.show");
Route::post("/addToCart", "ProductController@addToCart")->name("addToCart");