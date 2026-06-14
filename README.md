# 🎮 Pokemon Challenge API

API REST construida con **Laravel** para buscar y obtener detalles de Pokémon usando la [PokeAPI](https://pokeapi.co/).

## Stack

- **Laravel 12** — Framework PHP
- **Redis** — Cache de listas y detalles de Pokémon
- **Swagger / L5-Swagger** — Documentación interactiva de la API
- **Docker + Laravel Sail** — Entorno de desarrollo containerizado

---

## Características

- 🔍 Búsqueda de Pokémon por nombre (parcial, case-insensitive)
- 💾 Cache inteligente: lista completa por 24hs, detalles por 1 hora (Redis)
- 📖 Documentación interactiva con Swagger UI
- ✅ Tests con PHPUnit y mocks de Http/Cache
- 🐳 Deploy local con un solo comando via Laravel Sail

---

## Requisitos

- Docker Desktop instalado y ejecutándose
- Git

---

## Deploy local

```bash
# 1. Clonar el repositorio
git clone https://github.com/ArielEzequielPerez/challenge_pokemon_api.git
cd challenge_pokemon_api

# 2. Instalar dependencias
composer install

# 3. Configurar entorno
cp .env.example .env

# 4. Buildear y levantar los contenedores
./vendor/bin/sail build
./vendor/bin/sail up -d



> Si no tenés Composer instalado localmente podés usar Docker:
> ```bash
> docker run --rm -v $(pwd):/app composer composer install
> ```

---

## Uso

### Swagger UI

Documentación interactiva disponible en:

```
http://localhost:8080/api/documentation
```

### Endpoints

#### Buscar Pokémon por nombre

```
GET /pokemon/{term}
```

Filtra pokémon cuyo nombre contenga el término buscado.

```bash
curl http://localhost:8080/api/pokemon/char
```

```json
[
  { "name": "charmander", "url": "https://pokeapi.co/api/v2/pokemon/4/" },
  { "name": "charmeleon",  "url": "https://pokeapi.co/api/v2/pokemon/5/" },
  { "name": "charizard",   "url": "https://pokeapi.co/api/v2/pokemon/6/" }
]
```

#### Obtener detalles de un Pokémon

```
GET /pokemon/details/{name}
```

Retorna la respuesta completa de PokeAPI para ese Pokémon (cacheada 1 hora).

```bash
curl http://localhost:8080/api/pokemon/details/pikachu
```

---

## Tests

```bash
# Todos los tests
./vendor/bin/sail artisan test

# Tests específicos
./vendor/bin/sail php vendor/bin/phpunit --filter PokemonControllerTest
./vendor/bin/sail php vendor/bin/phpunit --filter PokemonControllerHttpTest

# Con cobertura de código (genera reporte en /coverage)
./vendor/bin/sail php vendor/bin/phpunit --coverage-html=coverage
```

---

## Comandos útiles

```bash
# Ver logs
./vendor/bin/sail logs

# Shell dentro del contenedor
./vendor/bin/sail shell

# Limpiar caché
./vendor/bin/sail artisan cache:clear

# Listar rutas
./vendor/bin/sail artisan route:list

# Detener contenedores
./vendor/bin/sail down

# Limpiar todo y empezar de cero
./vendor/bin/sail down -v
rm -rf vendor/
composer install
./vendor/bin/sail up -d
```

---

## Estructura del proyecto

```
app/Http/Controllers/
  └── PokemonController.php   # Lógica de búsqueda y detalles
routes/
  └── api.php                 # Definición de rutas
tests/Feature/
  ├── PokemonControllerTest.php
  └── PokemonControllerHttpTest.php
```

---

## Caché (Redis)

| Clave | TTL | Descripción |
|---|---|---|
| `pokemon_list` | 24 horas | Lista completa de Pokémon |
| `pokemon_{name}` | 1 hora | Detalle de cada Pokémon |

---

## Solución de problemas

**Docker daemon no está corriendo**
Abrí Docker Desktop y esperá a que termine de iniciar.

**Permission denied en `./vendor/bin/sail`**
```bash
chmod +x ./vendor/bin/sail
```

**Puerto 8080 en uso**
Cambiá el puerto en `compose.yaml`:
```yaml
ports:
  - "8081:80"
```

---

## Licencia

MIT