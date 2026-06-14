<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;


class PokemonController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/pokemon/{term}",
     *     summary="Buscar pokémon por nombre",
     *     tags={"Pokemon"},
     *     @OA\Parameter(
     *         name="term",
     *         in="path",
     *         required=true,
     *         description="Término de búsqueda",
     *         @OA\Schema(type="string", example="char")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista de pokémon que coinciden",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(
     *                 @OA\Property(property="name", type="string", example="charmander"),
     *                 @OA\Property(property="url", type="string", example="https://pokeapi.co/api/v2/pokemon/4/")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Error al consultar PokeAPI",
     *         @OA\JsonContent(
     *             @OA\Property(property="error", type="string", example="PokeAPI error")
     *         )
     *     )
     * )
     */
    public function search(string $term)
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

    /**
     * @OA\Get(
     *     path="/api/pokemon/details/{name}",
     *     summary="Obtener datos de un pokémon por nombre",
     *     tags={"Pokemon"},
     *     @OA\Parameter(
     *         name="name",
     *         in="path",
     *         required=true,
     *         description="Nombre del pokémon",
     *         @OA\Schema(type="string", example="pikachu")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Datos completos del pokémon (respuesta directa de PokeAPI)"
     *     )
     * )
     */
    public function getPokemon(string $name)
    {
        return Cache::remember("pokemon_$name", 3600, function () use ($name) {
            $url = "https://pokeapi.co/api/v2/pokemon/$name";
            return Http::get($url)->json();
        });
    }
}
