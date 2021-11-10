<?php

use Illuminate\Support\Facades\Route;

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
    return view('public.index');
});

Route::get('/working', function () {
    return view('templates.working');
});

Route::get('/sobre-nos', function () {
    return view('public.sobre-nos');
});


Route::get('/admin', function(){
    return view('admin.index');
});

Route::get('/admin/comunicados-oficiais', function(){
    return view('admin.comunicados-oficiais.index');  
});

Route::get('/admin/contatos', function(){
    return view('admin.contatos.index');  
});


Route::get('/admin/equipe', function(){
    return view('admin.equipe.index');  
});
