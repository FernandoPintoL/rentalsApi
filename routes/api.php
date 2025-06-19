<?php

use App\Http\Controllers\{
    AuthenticatedController,
    ContratoController,
    GaleriaInmuebleController,
    InmuebleController,
    MenuController,
    PagoController,
    PermissionsController,
    RolesController,
    TipoInmuebleController,
    UserController
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$controllers = [
    'tipoinmueble' => TipoInmuebleController::class,
    'menus' => MenuController::class,
    'inmuebles' => InmuebleController::class,
    'contratos' => ContratoController::class,
    'pagos' => PagoController::class,
    'roles' => RolesController::class,
    'permissions' => PermissionsController::class,
    'users' => UserController::class,
    'galeria-inmuebles' => GaleriaInmuebleController::class
];

// Ruta protegida por autenticación
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Ruta pública de ejemplo
Route::get('/saludo', function () {
    return ['mensaje' => '¡Hola desde la API!'];
});

Route::post('/app/galeria-inmueble/upload', [GaleriaInmuebleController::class, 'upload'])->name('app.galeria.inmueble.upload');
Route::post('/app/login', [AuthenticatedController::class, 'store'])->name('app.login');
Route::post('/app/create/user', [AuthenticatedController::class, 'createUser'])->name('app.create.user');
foreach ($controllers as $key => $controller) {
    Route::post("/app/$key/store", [$controller, 'store'])->name("app.$key.store");
    Route::post("/app/$key/query", [$controller, 'query'])->name("app.$key.query");
}
