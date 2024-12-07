<?php 


require 'Router.php';
$route = new Router();

$route->get('/', 'index.php');
$route->get('/articles', 'articles.php');


$base_url = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$route->router( $base_url, $method);