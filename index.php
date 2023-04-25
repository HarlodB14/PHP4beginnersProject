<?php
require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



$routes = [
    '/projects/index.php' => 'controllers/index.php',
    '/projects/views/about.php' => 'controllers/about.php',
    '/projects/views/contact.php' => 'controllers/contact.php',
];

if(array_key_exists($uri, $routes)){
    require $routes[$uri];
}