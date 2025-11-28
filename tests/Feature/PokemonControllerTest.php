<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class PokemonControllerTest extends TestCase
{
    public function test_search_returns_filtered_pokemons_and_caches_list()
    {
        // Simular que la cache no tiene la lista
        Cache::shouldReceive('get')->with('pokemon_list')->andReturn(null);

        // Respuesta simulada de la PokeAPI
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

        // Esperamos que la lista sea puesta en cache (colección)
        Cache::shouldReceive('put')->once();

        $controller = $this->app->make(\App\Http\Controllers\PokemonController::class);
        $response = $controller->search('pika');

        $this->assertInstanceOf(\Illuminate\Http\JsonResponse::class, $response);
        $data = $response->getData(true);

        $this->assertIsArray($data);
        $this->assertCount(1, $data);
        $this->assertEquals('pikachu', $data[0]['name']);
    }

    public function test_search_handles_pokeapi_error()
    {
        Cache::shouldReceive('get')->with('pokemon_list')->andReturn(null);

        Http::fake([
            'https://pokeapi.co/api/v2/pokemon?limit=2000' => Http::response(['error' => 'down'], 500),
        ]);

        $controller = $this->app->make(\App\Http\Controllers\PokemonController::class);
        $response = $controller->search('x');

        $this->assertInstanceOf(\Illuminate\Http\JsonResponse::class, $response);
        $this->assertEquals(500, $response->getStatusCode());
        $body = $response->getData(true);
        $this->assertArrayHasKey('error', $body);
    }

    public function test_getPokemon_uses_cache_remember_and_returns_data()
    {
        // Mockear Cache::remember para devolver datos sin ejecutar la closure
        Cache::shouldReceive('remember')->withArgs(function ($key, $seconds, $closure) {
            return $key === 'pokemon_mew' && $seconds === 3600 && is_callable($closure);
        })->andReturn(['name' => 'mew']);

        $controller = $this->app->make(\App\Http\Controllers\PokemonController::class);
        $result = $controller->getPokemon('mew');

        $this->assertIsArray($result);
        $this->assertEquals('mew', $result['name']);
    }
}
