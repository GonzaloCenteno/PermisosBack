<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PermisoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["prefix" => "v1/auth"], function() {
    Route::post("login", [AuthController::class, "login"]);
    Route::post("registro", [AuthController::class, "registrarse"]);
    Route::group(["middleware" => "auth:sanctum"], function() {
        Route::post("logout", [AuthController::class, "logout"]);
        Route::post("perfil", [AuthController::class, "miPerfil"]);
    });
});

Route::group(["prefix" => "v1", "middleware" => "auth:sanctum"], function() {
    Route::post("usuario/asignar-rol", [UsuarioController::class, "asignarRol"]);
    Route::post("usuario/remover-rol", [UsuarioController::class, "quitarRol"]);

    Route::post("role/asignar-permiso", [RoleController::class, "asignarPermiso"]);

    Route::apiResource("permiso", PermisoController::class);
    Route::apiResource("role", RoleController::class);
    Route::apiResource("usuario", UsuarioController::class);
});