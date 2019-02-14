<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
// $app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
//     $name = $args['name'];
//     $response->getBody()->write("Hello there, $name");

//     return $response;
// });

// $app->get('/hello/{name}', function ($request, $response, $args) {
//     $name = $args['name'];
//     $response->getBody()->write("Hello there, $name");

//     return $response;
// });
require_once('../app/api/get-books.php');
require_once('../app/api/post-books.php');
require_once('../app/api/delete-books.php');
require_once('../app/api/put-books.php');
$app->run();