<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


$resources = [
	'avis'        => App\Http\Controllers\API\AvisController::class,
	'couleurs'    => App\Http\Controllers\API\CouleurController::class,
	'critairs'    => App\Http\Controllers\API\CritairController::class,
	'discussions' => App\Http\Controllers\API\DiscussionController::class,
	'euros'       => App\Http\Controllers\API\EuroController::class,
	'favoris'     => App\Http\Controllers\API\FavorisController::class,
	'marques'     => App\Http\Controllers\API\MarqueController::class,
	'messages'    => App\Http\Controllers\API\MessageController::class,
	'roles'       => App\Http\Controllers\API\RoleController::class,
	'users'       => App\Http\Controllers\API\UserController::class,
	'vehicules'   => App\Http\Controllers\API\VehiculeController::class,
];

foreach ($resources as $resource => $controller) {
	Route::apiResource($resource, $controller);
}
