<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

// Rutas de la API
Route::get('api/pokemon/{name}', [PokemonController::class, 'search']);
Route::get('api/pokemon/details/{name}', [PokemonController::class, 'getPokemon']);