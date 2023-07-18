<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


final class Controller
{

    public function Index(Request $request, Response $response, $args): Response
    {
        $response = $response->withJson(array("message" => 'Run'), 200);
        return $response;
    }
}