<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', function () {
    echo "Welcome to home page";
});

Route::any('/test', function () {
    echo "Welcome to test page";
});


Route::get('/demo', function () {
    return view('demo');
});

Route::get('/user/{name}', function ($name) {
    // echo "<h1>$name</h1>";

    // Sending data to view
    $data = compact('name');
    return view('user')->with($data);
});


Route::get('/student/{name}/{id?}', function ($name,$id=null) {
    echo $name;
    echo $id;
});

Route::get('/html', function () {

    $demo = "<h1>Hello</h1>";
    $data = compact("demo");
    return view('html')->with($data);
});


// What is url value is not comming
Route::get('/people/{id?}', function ($id = null) {

    $data = compact('id');
    return view('people')->with($data);
});



//
Route::get('/home', function () {
    return view('home');
});







