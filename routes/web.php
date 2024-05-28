<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('servicios/{servi?}', function ($servi=null) {
    return view('catalog.servicios');
})
->where('servi','[A-Za-z]+');

Route::get('proyectos/{projec?}', function ($projec=null) {
    return view('catalog.proyectos');
})
->where('projec','[A-Za-z]+');

Route::get('clientes/{client?}', function ($client=null) {
    return view('catalog.clientes');
})
->where('client','[A-Za-z]+');

Route::get('blog/{numero?}', function ($numero=null) {
    return view('catalog.blog');
})
->where('numero','[0-9]+');

Route::get('contacto', function () {
    return view('catalog.contacto');
});
