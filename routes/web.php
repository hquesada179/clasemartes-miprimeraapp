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
    return view('welcome');
});

Route::get('/mi-ruta-a', function () {
    return ('Hola este es mi ruta');
});

Route::get('/php-basico', function () {

     echo " <h1>Hola</h1>";

     $nombre = "Helbert Mauricio";
     $apellido = "Quesada Lopez";
     $nombre_completo = $nombre . $apellido;
     $age = rand(10,54);
     $height = 1.75;
     $isLogin = rand(0,1);
     echo $nombre_completo;

     echo "*****************ESTRUCTURA DE DATOS****************";

     $message = "soy $nombre_completo tengo $age años";
     echo $message;


     echo "**********FUNCIONES************";


     $productsNames = ["Computador", "Teclado", 25, true, false];
     $teclado = [
        'name' => "teclado hp",
        'marca' => "HP",
        'precio' =>20000,
        'distribuciones' => [
            'latino',
            'mexico',
            'americano'
        ]
     ];

     $teclado['marca'] = "LG";
     echo $teclado['name'];

     foreach ($productsNames as $item) {
    echo $item . "<br>";
}





});

function printUser( stirng $name, int $age){
    return "$name tiene $age años!!!";
}
