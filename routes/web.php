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

Route::get('about', function () {
    return view('about.index');
});
Route::get('/home', function () {
    $blogs = [
      [
          'title' => 'title one',
          'body' => 'this is body one',
          'status' => 1
      ],
      [
          'title' => 'title two',
          'body' => 'this is body two',
          'status' => 0
      ],
      [
          'title' => 'title three',
          'body' => 'this is body three',
          'status' => 0
      ]
    ];
    return view('home', compact('blogs'));
});
Route::get('contact', function () {
    return "<h1>contact</h1>";
});
Route::get('contact/{id}', function ($id) {
    return $id;
});

Route::get('/welcome', function () {
    return view('welcome');
});
