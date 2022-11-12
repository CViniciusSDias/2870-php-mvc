<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface Controller
{
    public function processaRequisicao(ServerRequestInterface $request): ResponseInterface;
}
