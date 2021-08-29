<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\omecontrol;
use App\Http\Controllers\upcontrol;
use App\Http\Controllers\mp3control;

route:: post('/mp3play',[mp3control::class,'play']);
route::get('/mp3play',[mp3control::class,'play']);
route::post('/formulario',[omecontrol::class,'formulario']);
route::get ('/formulario',[omecontrol::class,'formulario']);
route:: get('/uploads',[upcontrol::class,'uploads']);
route:: post('/uploads',[upcontrol::class,'uploads']);
route:: get('/uploads/upcheck',[upcontrol::class,'upcheck']);
route:: post('/uploads/upcheck',[upcontrol::class,'upcheck']);

Route::get('/', function () {
    return view('welcome');
});
