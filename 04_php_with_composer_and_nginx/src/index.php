<?php

require '../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

$username = $request->query->get('username') ?: 'World';

$response = new Response();

$response->setContent("<h1>Hello, {$username}</h1>");
$response->headers->set('Content-Type', 'text/html');
$response->send();
