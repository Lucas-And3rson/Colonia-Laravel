<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class auth
{
    function auth($req, $res, $next) {
        if (isset($_SESSION['usuario'])) {
            $next();
        } else {
            header("Location: /usuarios/login");
            exit;
        }
    }
}
