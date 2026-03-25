<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('formulario');
});


use Illuminate\Http\Request;

Route::post('/procesar', function (Request $request) {
    $nombre = $request->input('nombre');
    $edad = $request->input('edad');

    if($edad >= 18){
        $mensaje = "Hola, $nombre. Eres mayor de edad.";
    } else {
        $mensaje = "Hola, $nombre. Eres menor de edad.";
    }
    return view('resultado', ['mensaje' => $mensaje]);
});


