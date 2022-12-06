<?php

namespace Src\site;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Home
{
    public function index(Request $request, Response $response)
    {
        $response->getBody()->write('Home::Index');
        return $response;
    }
}