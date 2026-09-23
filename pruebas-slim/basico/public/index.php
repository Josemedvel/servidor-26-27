<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\RequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $req, Response $res, $args) {
    $res->getBody()->write("Hello world!");
    return $res;
});

$app->get('/hola', function (Request $req, Response $res, $args) {
    $res->getBody()->write("Hola buenas");
    return $res;
});

$app->run();