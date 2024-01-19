<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::put('/edit-people/{id}', [PeopleController::class, 'edit']); 
Route::get('/people', [PeopleController::class, 'index']); 
Route::get('/people/{id}', [PeopleController::class, 'show']); 
Route::post('/people', [PeopleController::class, 'create']); 
Route::delete('/people/{id}', [PeopleController::class, 'delete']);