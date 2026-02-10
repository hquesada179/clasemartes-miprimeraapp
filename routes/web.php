<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/contacto', function (Request $request) {
    echo "<pre>";
    print_r($request->all()); // muestra datos (query, form, etc.)
    echo "</pre>";

    return "Ruta contacto OK";
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-ruta-a', function () {
    return 'Hola este es mi ruta';
});

Route::get('/php-basico', function () {

    $nombre = "Helbert Mauricio";
    $apellido = "Quesada Lopez";
    $nombre_completo = $nombre . " " . $apellido;

    $age = rand(10, 54);
    $height = 1.75;
    $isLogin = rand(0, 1);

    $message = "Soy $nombre_completo, tengo $age años";

    $productsNames = ["Computador", "Teclado", 25, true, false];

    $teclado = [
        'name' => "teclado hp",
        'marca' => "HP",
        'precio' => 20000,
        'distribuciones' => [
            'latino',
            'mexico',
            'americano'
        ]
    ];

    $teclado['marca'] = "LG";

    // Construimos salida HTML (mejor que usar muchos echo)
    $html  = "<h1>Hola</h1>";
    $html .= "<p><strong>Nombre:</strong> $nombre_completo</p>";
    $html .= "<p><strong>Mensaje:</strong> $message</p>";
    $html .= "<hr>";
    $html .= "<h3>Estructura de datos</h3>";
    $html .= "<p><strong>Teclado:</strong> {$teclado['name']} ({$teclado['marca']})</p>";
    $html .= "<p><strong>Productos:</strong></p><ul>";

    foreach ($productsNames as $item) {
        $html .= "<li>" . (is_bool($item) ? ($item ? 'true' : 'false') : $item) . "</li>";
    }

    $html .= "</ul>";

    return $html;
});

function printUser(string $name, int $age)
{
    return "$name tiene $age años!!!";
}
