<?php

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
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/product', function () {
    return view('product');
});
// product
Route::get('/coal', function () {
    return view('product.coal');
});
Route::get('/nickel', function () {
    return view('product.nickel');
});
Route::get('/paper', function () {
    return view('product.paper');
});
Route::get('/silicasand', function () {
    return view('product.silicasand');
});
Route::get('/tissue', function () {
    return view('product.tissue');
});
// Our Commitment for Sustainability
Route::get('/people', function () {
    return view('Sustainability.people');
});
Route::get('/society', function () {
    return view('Sustainability.society');
});
Route::get('/economic', function () {
    return view('Sustainability.economic');
});
Route::get('/operation', function () {
    return view('Sustainability.operation');
});
Route::get('/environment', function () {
    return view('Sustainability.environment');
});
Route::get('/governance', function () {
    return view('Sustainability.governance');
});
Route::get('/overview', function () {
    return view('company.overview');
});
Route::get('/history', function () {
    return view('company.history');
});

Route::get('/purpose&value', function () {
    return view('company./purpose&value');
});