<?php

use App\Http\Controllers\{AuthenticatedController,
    ContratoController,
    GaleriaInmuebleController,
    InmuebleController,
    InmuebleDeviceController,
    MenuController,
    PagoController,
    PermissionsController,
    RolesController,
    SolicitudAlquilerModelController,
    TipoInmuebleController,
    UserController};
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
    'galeria-inmuebles' => GaleriaInmuebleController::class,
    'solicitudes-alquiler' => SolicitudAlquilerModelController::class
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
Route::post('/app/logout', [AuthenticatedController::class, 'destroy'])->name('app.logout');
Route::post('/app/create/user', [AuthenticatedController::class, 'createUser'])->name('app.create.user');
foreach ($controllers as $key => $controller) {
    Route::post("/app/$key/store", [$controller, 'store'])->name("app.$key.store");
    Route::post("/app/$key/query", [$controller, 'query'])->name("app.$key.query");
}
Route::put('/app/inmuebles/{inmueble}', [InmuebleController::class, 'update'])->name('app.inmuebles.update');
Route::prefix('/app/inmuebles/{inmueble}')->group(function () {
    // Asignar dispositivo a inmueble (POST)
    Route::post('/dispositivos', [InmuebleDeviceController::class, 'store'])->name('inmueble.device.store');
    // Listar dispositivos de un inmueble (GET)
    Route::get('/dispositivos', [InmuebleDeviceController::class, 'index'])->name('inmueble.device.index');
    // Enviar comando a dispositivo (POST)
    Route::post('/control-dispositivo', [InmuebleDeviceController::class, 'controlDevice'])->name('inmueble.device.control');
});

// Ruta solicitudes por user
Route::get('/app/solicitudes-alquiler/user/{userId}', [SolicitudAlquilerModelController::class, 'solicitudesPorUsuario'])->name('app.solicitudes-alquiler.solicitudesPorUsuario');
// Ruta solicitudes por propietario
Route::get('/app/solicitudes-alquiler/propietario/{propietarioId}', [SolicitudAlquilerModelController::class, 'solicitudesPorPropietario'])->name('app.solicitudes-alquiler.solicitudesPorPropietario');
// Ruta solicitudes de usuario por estado
Route::get('/app/solicitudes-alquiler/user/{userId}/estado/{estado}', [SolicitudAlquilerModelController::class, 'solicitudesPorUsuarioYEstado'])->name('app.solicitudes-alquiler.solicitudesPorUsuarioYEstado');
// Ruta actualizar estado de solicitud
Route::put('/app/solicitudes-alquiler/{solicitudAlquilerModel}/estado', [SolicitudAlquilerModelController::class, 'updateEstado'])->name('app.solicitudes-alquiler.updateEstado');

// Ruta inmuebles por propietario
Route::post('/app/inmuebles/propietario', [InmuebleController::class, 'getInmueblesByPropietario'])->name('app.inmuebles.inmueblesPorPropietario');
// Ruta inmuebles por id
Route::get('/app/inmuebles/{inmueble}', [InmuebleController::class, 'getInmuebleById'])->name('app.inmuebles.show');
// Ruta subir imagen del inmueble
Route::post('/app/inmuebles/subir-imagen', [InmuebleController::class, 'subirImagen'])->name('app.inmuebles.subirImagen');
// Ruta galeria de imagenes del inmueble
Route::get('/app/inmuebles/{inmueble}/galeria', [InmuebleController::class, 'getGaleriaImagenes'])->name('app.inmuebles.galeria');
// Ruta para eliminar una imagen del inmueble
Route::delete('/app/inmuebles/{inmueble}/galeria/{imagenId}', [GaleriaInmuebleController::class, 'destroy'])->name('app.inmuebles.galeria.destroy');
Route::get('app/inmuebles/{inmueble}/galeria/first', [GaleriaInmuebleController::class, 'firstImage'])->name('app.inmuebles.galeria.first');
// Eliminar inmueble
Route::delete('/app/inmuebles/{inmueble}', [InmuebleController::class, 'destroy'])->name('app.inmuebles.destroy');
