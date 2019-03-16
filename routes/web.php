<?php

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

$router->get('/pelajaran', 'PelajaranController@read');
$router->post('/pelajaran', 'PelajaranController@create');
$router->post('/pelajaran/{id}', 'PelajaranController@update');
$router->delete('/pelajaran/{id}', 'PelajaranController@delete');
$router->get('/pelajaran/{id}', 'PelajaranController@detail');

$router->get('/guru', 'GuruController@read');
$router->post('/guru', 'GuruController@create');
$router->post('/guru/{id}', 'GuruController@update');
$router->delete('/guru/{id}', 'GuruController@delete');
$router->get('/guru/{id}', 'GuruController@detail');

