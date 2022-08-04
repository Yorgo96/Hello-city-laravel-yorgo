<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;


Route :: get('/',function(){
    return view('pages.accueil');
})->name("accueil");
Route::get('/apropos-nous',function(){
    return view('pages.apropos');
})->name("apropos");
