<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AbstractController;

class ErrorController extends AbstractController
{
    public function notFoundAction(): void
    {
        parent::render('error/notFound');
    }
}