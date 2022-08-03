<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;


Route :: get('/',function(){
    return view('pages.accueil');
});
Route::get('/apropos-nous',function(){
    return view('pages.apropos');
});
