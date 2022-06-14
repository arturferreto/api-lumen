<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Models\{Author, ImageNews, News};

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api/v1', 'namespace' => 'V1', 'as' => Author::class], function() use ($router) {
    $router->get('/autores', ['uses' => 'AuthorController@findAll']);
    $router->get('/autores/{id}', ['uses' => 'AuthorController@findOneBy']);
    $router->post('/autores', ['uses' => 'AuthorController@create', 'middleware' => 'ValidateDataMiddleware']);
    $router->put('/autores/{param}', ['uses' => 'AuthorController@editBy', 'middleware' => 'ValidateDataMiddleware']);
    $router->delete('/autores/{id}', ['uses' => 'AuthorController@delete']);
});

$router->group(['prefix' => 'api/v1', 'namespace' => 'V1', 'as' => News::class], function() use ($router) {
    $router->get('/noticias', ['uses' => 'NewsController@findAll']);
    $router->get('/noticias/autor/{author}', ['uses' => 'NewsController@findByAuthor']);
    $router->get('/noticias/{param}', ['uses' => 'NewsController@findBy']);
    $router->post('/noticias', ['uses' => 'NewsController@create', 'middleware' => 'ValidateDataMiddleware']);
    $router->put('/noticias/{param}', ['uses' => 'NewsController@editBy', 'middleware' => 'ValidateDataMiddleware']);
    $router->delete('/noticias/{param}', ['uses' => 'NewsController@deleteBy']);
    $router->delete('/noticias/autor/{author}', ['uses' => 'NewsController@deleteByAuthor']);
});

$router->group(['prefix' => 'api/v1', 'namespace' => 'V1', 'as' => ImageNews::class], function() use ($router) {
    $router->get('/imagens-noticias', ['uses' => 'ImageNewsController@findAll']);
    $router->get('/imagens-noticias/{id}', ['uses' => 'ImageNewsController@findOneBy']);
    $router->get('/imagens-noticias/noticia/{news}', ['uses' => 'ImageNewsController@findByNews']);
    $router->post('/imagens-noticias', ['uses' => 'ImageNewsController@create', 'middleware' => 'ValidateDataMiddleware']);
    $router->put('/imagens-noticias/{param}', ['uses' => 'ImageNewsController@editBy', 'middleware' => 'ValidateDataMiddleware']);
    $router->delete('/imagens-noticias/{id}', ['uses' => 'ImageNewsController@delete']);
    $router->delete('/imagens-noticias/noticia/{news}', ['uses' => 'ImageNewsController@deleteByNews']);
});
