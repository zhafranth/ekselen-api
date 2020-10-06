<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});

// Categories
$router->get('/categories', 'CategoriesController@index');
$router->get('/categories/{categories}', 'CategoriesController@categoriItem');
$router->post('/categories', 'CategoriesController@setDataCategories');
$router->put('/categories/{id}', 'CategoriesController@updateDataCategories');
$router->delete('/categories/{id}', 'CategoriesController@deleteDateCategories');

// kupon
$router->get('/kupon', 'KuponController@index');
$router->get('/kupon/{id}', 'KuponController@kuponItem');
$router->post('/kupon', 'KuponController@setDataKupon');
$router->put('/kupon/{id}','KuponController@updateDataKupon');
$router->delete('/kupon/{id}', 'KuponController@deleteDataKupon');

// Rating
$router->get('/rating','RatingController@index');
$router->get('/rating/{id}', 'RatingController@ratingItem');
$router->post('/rating','RatingController@setDataRating');
$router->put('/rating/{id}','RatingController@updateDataRating');
$router->delete('/rating/{id}', 'RatingController@deleteDataRating');

// Komen
$router->get('/komen','KomenController@index');
$router->get('/komen/{id}','KomenController@komenItem');
$router->post('/komen','KomenController@setDataKomen');
$router->put('/komen/{id}','KomenController@updateDataKomen');
$router->delete('/komen/{id}','KomenController@deleteDataKomen');