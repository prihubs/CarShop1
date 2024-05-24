<?php

use Illuminate\Support\Facades\Route;
require "func.php";


Route::get('/', function () {

    $Name = sName("type")["Title"];
    $Nav = sNav("Nav")[1];

    return view('home', [
        "Name" => $Name,
        "Nav" => $Nav
    ]);

});


Route::get('/about', function(){
    return view('about');
});
