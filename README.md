# Pokemon Challenge API# Pokemon Challenge API<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



Una API Laravel para buscar y obtener detalles de Pokémon usando la [PokeAPI](https://pokeapi.co/).



## CaracterísticasUna API Laravel para buscar y obtener detalles de Pokémon usando la [PokeAPI](https://pokeapi.co/).<p align="center">



- 🔍 **Búsqueda de Pokémon**: Filtra pokémon por nombre<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>

- 💾 **Cache inteligente**: Cachea la lista de pokémon por 24 horas

- 📊 **Detalles detallados**: Obtén información completa de cada pokémon## Características<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>

- ✅ **Tests incluidos**: Cobertura con PHPUnit y mocks de Http/Cache

- 🐳 **Docker Sail**: Despliega fácilmente con Laravel Sail<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>



## Requisitos- 🔍 **Búsqueda de Pokémon**: Filtra pokémon por nombre<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>



- **Docker Desktop** instalado y ejecutándose- 💾 **Cache inteligente**: Cachea la lista de pokémon por 24 horas</p>

- **Git** para clonar el repositorio

- **Composer** (OPCIONAL: puede instalarse con Docker si no lo tienes)- 📊 **Detalles detallados**: Obtén información completa de cada pokémon



## Guía de Despliegue Local con Laravel Sail- ✅ **Tests incluidos**: Cobertura con PHPUnit y mocks de Http/Cache## About Laravel



### Paso 1: Clonar el repositorio- 🐳 **Docker Sail**: Despliega fácilmente con Laravel Sail



```bashLaravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

git clone https://github.com/ArielEzequielPerez/challenge_pokemon_api.git

cd challenge_pokemon_api## Requisitos

```

- [Simple, fast routing engine](https://laravel.com/docs/routing).

### Paso 2: Instalar dependencias PHP

- **Docker Desktop** instalado y ejecutándose- [Powerful dependency injection container](https://laravel.com/docs/container).

#### Opción A: Con Composer instalado localmente (recomendado si lo tienes)

- **Docker Compose** (generalmente incluido con Docker Desktop)- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.

```bash

composer install- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).

```

## Guía de Despliegue Local con Laravel Sail- Database agnostic [schema migrations](https://laravel.com/docs/migrations).

#### Opción B: Usando Docker (si no tienes Composer instalado)

- [Robust background job processing](https://laravel.com/docs/queues).

Si no tienes Composer, puedes usar la imagen oficial de Docker:

### Paso 1: Clonar el repositorio- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

```bash

docker run --rm -v $(pwd):/app composer composer install

```

```bashLaravel is accessible, powerful, and provides tools required for large, robust applications.

Este comando:

- Descarga la imagen oficial de Composergit clone https://github.com/ArielEzequielPerez/challenge_pokemon_api.git

- Instala todas las dependencias en tu proyecto

- No requiere tener Composer en tu máquinacd challenge_pokemon_api## Learning Laravel



**Nota:** Una vez completado, tendrás `vendor/bin/sail` disponible para usar en los siguientes pasos.```



### Paso 3: Iniciar Laravel Sail (Docker)Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.



Una vez que `vendor/bin/sail` esté disponible (desde la Opción A o B), inicia los contenedores Docker:### Paso 2: Instalar dependencias PHP



```bashIf you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

./vendor/bin/sail up -d

``````bash



**Nota**: composer install## Laravel Sponsors

- Si es la primera vez, descargará las imágenes de Docker (puede tomar unos minutos)

- El flag `-d` ejecuta los contenedores en background```

- Para ver los logs en tiempo real, omite `-d`: `./vendor/bin/sail up`

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Paso 4: Crear archivo `.env`

### Paso 3: Iniciar Laravel Sail (Docker)

```bash

cp .env.example .env### Premium Partners

```

Este comando inicia los contenedores Docker (PHP, MySQL, Redis, etc.):

### Paso 5: Generar clave de aplicación

- **[Vehikl](https://vehikl.com)**

```bash

./vendor/bin/sail artisan key:generate```bash- **[Tighten Co.](https://tighten.co)**

```

./vendor/bin/sail up -d- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**

### Paso 6: Ejecutar migraciones de base de datos

```- **[64 Robots](https://64robots.com)**

```bash

./vendor/bin/sail artisan migrate- **[Curotec](https://www.curotec.com/services/technologies/laravel)**

```

**Nota**: - **[DevSquad](https://devsquad.com/hire-laravel-developers)**

### Paso 7: Verificar que todo funciona

- Si es la primera vez, descargará las imágenes de Docker (puede tomar unos minutos).- **[Redberry](https://redberry.international/laravel-development)**

```bash

./vendor/bin/sail artisan tinker- El flag `-d` ejecuta los contenedores en background.- **[Active Logic](https://activelogic.com)**

```

- Para ver los logs en tiempo real, omite `-d`: `./vendor/bin/sail up`

En el tinker shell, escribe `exit()` para salir.

## Contributing

## Rutas Disponibles

### Paso 4: Crear archivo `.env`

### Buscar Pokémon

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

**GET** `/pokemon/{term}`

```bash

Filtra pokémon por nombre (búsqueda parcial, case-insensitive).

cp .env.example .env## Code of Conduct

**Ejemplo:**

```bash```

curl http://localhost/pokemon/pika

```In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).



**Respuesta:**### Paso 5: Generar clave de aplicación

```json

[## Security Vulnerabilities

  {

    "name": "pikachu",```bash

    "url": "https://pokeapi.co/api/v2/pokemon/25/"

  }./vendor/bin/sail artisan key:generateIf you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

]

``````



### Obtener Detalles de Pokémon## License



**GET** `/pokemon/details/{name}`### Paso 6: Ejecutar migraciones de base de datos



Retorna información detallada de un pokémon específico (cacheada por 1 hora).The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



**Ejemplo:**```bash

```bash./vendor/bin/sail artisan migrate

curl http://localhost/pokemon/details/pikachu```

```

### Paso 7: Verificar que todo funciona

## Ejecutar Tests

```bash

### Todos los tests./vendor/bin/sail artisan tinker

```

```bash

./vendor/bin/sail artisan testEn el tinker shell, escribe `exit()` para salir.

```

## Rutas Disponibles

o con phpunit directamente:

### Buscar Pokémon

```bash

./vendor/bin/sail php vendor/bin/phpunit**GET** `/pokemon/{term}`

```

Filtra pokémon por nombre (búsqueda parcial, case-insensitive).

### Tests específicos

**Ejemplo:**

```bash```bash

./vendor/bin/sail php vendor/bin/phpunit --filter PokemonControllerTestcurl http://localhost/pokemon/pika

./vendor/bin/sail php vendor/bin/phpunit --filter PokemonControllerHttpTest```

```

**Respuesta:**

### Con cobertura de código```json

[

```bash  {

./vendor/bin/sail php vendor/bin/phpunit --coverage-html=coverage    "name": "pikachu",

```    "url": "https://pokeapi.co/api/v2/pokemon/25/"

  }

Los reportes se generan en la carpeta `coverage/`.]

```

## Comandos Útiles de Sail

### Obtener Detalles de Pokémon

### Ver logs

**GET** `/pokemon/details/{name}`

```bash

./vendor/bin/sail logsRetorna información detallada de un pokémon específico (cacheada por 1 hora).

```

**Ejemplo:**

### Acceder a la shell PHP dentro del contenedor```bash

curl http://localhost/pokemon/details/pikachu

```bash```

./vendor/bin/sail shell

```## Ejecutar Tests



### Ejecutar comandos artisan### Todos los tests



```bash```bash

./vendor/bin/sail artisan <comando>./vendor/bin/sail artisan test

``````



Ejemplos:o

```bash

./vendor/bin/sail artisan route:list```bash

./vendor/bin/sail artisan cache:clear./vendor/bin/sail php vendor/bin/phpunit

``````



### Detener los contenedores### Tests específicos



```bash```bash

./vendor/bin/sail down./vendor/bin/sail php vendor/bin/phpunit --filter PokemonControllerTest

```./vendor/bin/sail php vendor/bin/phpunit --filter PokemonControllerHttpTest

```

### Reiniciar los contenedores

### Con cobertura de código

```bash

./vendor/bin/sail restart```bash

```./vendor/bin/sail php vendor/bin/phpunit --coverage-html=coverage

```

### Ver estado de los contenedores

Los reportes se generan en la carpeta `coverage/`.

```bash

./vendor/bin/sail ps## Comandos Útiles de Sail

```

### Ver logs

## Estructura del Proyecto

```bash

```./vendor/bin/sail logs

app/Http/Controllers/PokemonController.php    # Controlador principal```

routes/web.php                                # Rutas definidas

tests/Feature/                                # Tests de características### Acceder a la shell PHP dentro del contenedor

    ├── PokemonControllerTest.php

    └── PokemonControllerHttpTest.php```bash

config/                                       # Configuración de la app./vendor/bin/sail shell

database/                                     # Migraciones y seeders```

```

### Ejecutar comandos artisan

## Caché y Configuración

```bash

- **Búsqueda**: Cachea la lista completa por 24 horas (`pokemon_list`)./vendor/bin/sail artisan <comando>

- **Detalles**: Cachea cada pokémon por 1 hora (`pokemon_{name}`)```

- Driver de caché: SQLite (configurado en `config/cache.php`)

Ejemplo:

## Solución de Problemas```bash

./vendor/bin/sail artisan route:list

### Error: "Docker daemon is not running"./vendor/bin/sail artisan cache:clear

```

Asegúrate de que Docker Desktop esté abierto y ejecutándose.

### Detener los contenedores

### Error: "Permission denied" en `./vendor/bin/sail`

```bash

Dale permisos de ejecución:./vendor/bin/sail down

```bash```

chmod +x ./vendor/bin/sail

```### Reiniciar los contenedores



### Puerto 80 ya en uso```bash

./vendor/bin/sail restart

Cambia el puerto en `compose.yaml`:```

```yaml

ports:### Ver estado de los contenedores

  - "8080:80"  # Usa puerto 8080 en lugar de 80

``````bash

./vendor/bin/sail ps

Luego accede a `http://localhost:8080````



### Error en Opción B: "docker command not found"## Estructura del Proyecto



Asegúrate de que Docker esté instalado y el daemon esté ejecutándose. Luego intenta de nuevo:```

app/Http/Controllers/PokemonController.php    # Controlador principal

```bashroutes/web.php                                # Rutas definidas

docker run --rm -v $(pwd):/app composer composer installtests/Feature/                                # Tests de características

```    ├── PokemonControllerTest.php

    └── PokemonControllerHttpTest.php

### Limpiar todo y empezar de nuevoconfig/                                       # Configuración de la app

database/                                     # Migraciones y seeders

```bash```

./vendor/bin/sail down -v   # Borra contenedores y volúmenes

rm -rf vendor/               # Borra dependencias## Caché y Configuración

composer install             # Reinstala (o usa Opción B si no tienes Composer)

./vendor/bin/sail up -d      # Inicia de nuevo- **Búsqueda**: Cachea la lista completa por 24 horas (`pokemon_list`)

```- **Detalles**: Cachea cada pokémon por 1 hora (`pokemon_{name}`)

- Driver de caché: SQLite (configurado en `config/cache.php`)

## Desarrollo

## Solución de Problemas

### Formato de código

### Error: "Docker daemon is not running"

```bash

./vendor/bin/sail artisan pintAsegúrate de que Docker Desktop esté abierto y ejecutándose.

```

### Error: "Permission denied" en `./vendor/bin/sail`

### Limpieza de caché

Dale permisos de ejecución:

```bash```bash

./vendor/bin/sail artisan cache:clearchmod +x ./vendor/bin/sail

``````



## Licencia### Puerto 80 ya en uso



Proyecto bajo licencia MIT.Cambia el puerto en `compose.yaml`:

```yaml
ports:
  - "8080:80"  # Usa puerto 8080 en lugar de 80
```

Luego accede a `http://localhost:8080`

### Limpiar todo y empezar de nuevo

```bash
./vendor/bin/sail down -v   # Borra contenedores y volúmenes
rm -rf vendor/               # Borra dependencias
composer install             # Reinstala
./vendor/bin/sail up -d      # Inicia de nuevo
```

## Desarrollo

### Formato de código

```bash
./vendor/bin/sail artisan pint
```

### Limpieza de caché

```bash
./vendor/bin/sail artisan cache:clear
```

## Licencia

Proyecto bajo licencia MIT.
