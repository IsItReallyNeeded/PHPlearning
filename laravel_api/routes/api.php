<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::put('/staszek/54512/edit-people/{id}', [PeopleController::class, 'edit']); 
Route::get('/staszek/54512/people', [PeopleController::class, 'index']); 
Route::get('/staszek/54512/people/{id}', [PeopleController::class, 'show']); 
Route::post('/staszek/54512/people', [PeopleController::class, 'create']); 
Route::delete('/staszek/54512/people/{id}', [PeopleController::class, 'delete']);