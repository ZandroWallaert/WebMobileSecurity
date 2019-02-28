<?php

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
    return "Hello from laravel";
});
Route::get('/welcome', function () {
    return "Welcome at Howest University of Applied Sciences";
});
Route::get('/hello/{name}', function ($name) {
    return "Hello " . $name . "!";
});
Route::get('/calc/{operator}/{operand1}/{operand2}', function ($operator, $operand1, $operand2) {
    switch ($operator) {
        case "add":
            $add = $operand1 + $operand2;
            return "{$operand1} {$operator} {$operand2} = {$add}";
            break;
        case "mul":
            $mul = $operand1 * $operand2;
            return "{$operand1} {$operator} {$operand2} = {$mul}";
            break;
        case "sub":
            $sub = $operand1 - $operand2;
            return "{$operand1} {$operator} {$operand2} = {$sub}";
            break;
        case "div":
            $div = $operand1 / $operand2;
            return "{$operand1} {$operator} {$operand2} = {$div}";
            break;
    }
});