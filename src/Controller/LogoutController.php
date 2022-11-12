<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class LogoutController implements Controller
{
    public function processaRequisicao(ServerRequestInterface $request): ResponseInterface
    {
        session_destroy();
        return new Response(302, ['Location' => '/login']);
    }
}
