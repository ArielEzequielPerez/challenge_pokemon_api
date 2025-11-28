<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    public function search($term)
    {
        $key = "pokemon_list";
        $pokemonList = Cache::get($key);

        if (!$pokemonList) {
            $response = Http::get("https://pokeapi.co/api/v2/pokemon?limit=2000");

            if ($response->failed()) {
                return response()->json(['error' => 'PokeAPI error'], 500);
            }

            $pokemonList = collect($response->json()['results']);
            Cache::put($key, $pokemonList, now()->addDay());
        }
        $filtered = $pokemonList->filter(function ($pokemon) use ($term) {
            return str_contains(strtolower($pokemon['name']), strtolower($term));
        });

        return response()->json($filtered->values());
    }

    public function getPokemon($name)
    {
        return Cache::remember("pokemon_$name", 3600, function () use ($name) {
            $url = "https://pokeapi.co/api/v2/pokemon/$name";
            return Http::get($url)->json();
        });
    }
}
