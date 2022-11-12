<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

class LoginFormController extends ControllerWithHtml implements Controller
{
    public function processaRequisicao(): void
    {
        if (array_key_exists('logado', $_SESSION) && $_SESSION['logado'] === true) {
            header('Location: /');
            return;
        }

        $this->renderTemplate('login-form');
    }
}
