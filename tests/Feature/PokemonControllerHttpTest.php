<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class PokemonControllerHttpTest extends TestCase
{
    public function test_search_route_returns_filtered_json_and_caches()
    {
        Cache::shouldReceive('get')->with('pokemon_list')->andReturn(null);

        $apiResponse = [
            'results' => [
                ['name' => 'pikachu', 'url' => 'https://pokeapi.co/api/v2/pokemon/25/'],
                ['name' => 'bulbasaur', 'url' => 'https://pokeapi.co/api/v2/pokemon/1/'],
                ['name' => 'raichu', 'url' => 'https://pokeapi.co/api/v2/pokemon/26/'],
            ],
        ];

        Http::fake([
            'https://pokeapi.co/api/v2/pokemon?limit=2000' => Http::response($apiResponse, 200),
        ]);

        Cache::shouldReceive('put')->once();

        $response = $this->getJson('/pokemon/pika');

        $response->assertStatus(200);
        $response->assertJsonCount(1);
        $response->assertJsonFragment(['name' => 'pikachu']);
    }

    public function test_search_route_handles_pokeapi_error()
    {
        Cache::shouldReceive('get')->with('pokemon_list')->andReturn(null);

        Http::fake([
            'https://pokeapi.co/api/v2/pokemon?limit=2000' => Http::response(['message' => 'error'], 500),
        ]);

        $response = $this->getJson('/pokemon/x');

        $response->assertStatus(500);
        $response->assertJsonStructure(['error']);
    }

    public function test_getPokemon_route_uses_cache_and_returns_data()
    {
        Cache::shouldReceive('remember')->withArgs(function ($key, $seconds, $closure) {
            return $key === 'pokemon_mew' && $seconds === 3600 && is_callable($closure);
        })->andReturn(['name' => 'mew']);

        $response = $this->getJson('/pokemon/details/mew');

        $response->assertStatus(200);
        $response->assertJson(['name' => 'mew']);
    }
}
