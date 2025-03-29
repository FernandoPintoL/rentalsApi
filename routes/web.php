<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\{
    AccesorioController,
    AccionControlsContratoController,
    AccionesControlController,
    ClienteController,
    ContratoController,
    GaleriaInmuebleController,
    InmuebleAccesorioController,
    InmuebleController,
    PagoController,
    PermissionsController,
    PropietarioController,
    RolesController,
    TipoClienteController,
    TipoInmuebleController,
    UserController
};

$resources = [
    'accesorio' => AccesorioController::class,
    'accion-control-contrato' => AccionControlsContratoController::class,
    'accion-control' => AccionesControlController::class,
    'cliente' => ClienteController::class,
    'contrato' => ContratoController::class,
    'galeria-inmueble' => GaleriaInmuebleController::class,
    'inmueble-accesorio' => InmuebleAccesorioController::class,
    'inmueble' => InmuebleController::class,
    'pago' => PagoController::class,
    'permissions' => PermissionsController::class,
    'propietario' => PropietarioController::class,
    'roles' => RolesController::class,
    'tipo-cliente' => TipoClienteController::class,
    'tipo-inmueble' => TipoInmuebleController::class,
    'users' => UserController::class,
];

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

foreach ($resources as $key => $controller) {
    Route::resource("/$key", $controller);
    Route::post("/$key/query", [$controller, 'query'])->name("$key.query");
}
