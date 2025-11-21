<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    public function show($name){
        $key = "pokemon_{$name}";
        $pokemon = Cache::get($key);

        if (!$pokemon) {
            $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$name}");
            if ($response->failed()) {
                return response()->json(['error' => 'Pokemon not found'], 404);
            }
            $pokemon = $response->json();
            Cache::put($key, $pokemon, now()->addHour());
        }
        return response()->json($pokemon);
    }
}
