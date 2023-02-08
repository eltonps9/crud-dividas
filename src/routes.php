<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index'); 
$router->get('/new', 'HomeController@new');
$router->post('/addAction', 'HomeController@addAction');
$router->get('/deletar/{id}', 'HomeController@deletar');
$router->post('/update/{id}', 'HomeController@update');
$router->get('/update/{id}', 'HomeController@up');
