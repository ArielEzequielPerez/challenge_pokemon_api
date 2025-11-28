<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/pokemon/{name}', [PokemonController::class, 'search']);
Route::get('/pokemon/details/{name}', [PokemonController::class, 'getPokemon']);