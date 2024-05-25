<?php

use Illuminate\Support\Facades\Route;
require "func.php";


Route::get('/', function () {

    $Name = sName("type")["Title"];
    $Nav = sNav("Nav")[1];
    $Cars = AllCars();

    return view('home', [
        "Name" => $Name,
        "Nav" => $Nav,
        "Cars" => $Cars
    ]);

});

Route::get('/about', function(){

    $Name = sName('type')["Title"];
    $Nav = sName('Nav')[2];

    return view('about', [
        "Name" => $Name,
        "Nav" => $Nav
    ]);
});

Route::get('/cars', function(){

    $Name = sName("type")["Title"];
    $Nav = sNav("Nav")[3];
    $Cars = AllCars();

    return view('cars', [
        "Name" => $Name,
        "Nav" => $Nav,
        "Cars" => $Cars
    ]);
});

Route::get('/car/{id}', function($id){

    $Name = sName('type')["Title"];
    $Nav = sNav("Nav")[4];
    $Car = singleCar($id);
    // dd($Car);
    // $Car = singleCar($id);

    return view('car', [
        "Name" => $Name,
        "Nav" => $Nav,
        "Cars" => $Car
    ]);
});

Route::get('/contact', function(){

    $Name = sName('type')["Title"];
    $Nav = sName('Nav')[5];

    return view('contact', [
        "Name" => $Name,
        "Nav" => $Nav
    ]);
});
