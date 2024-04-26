<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
require_once("../models/UsuarioModel.php");

class usuarioSuperAdmin
{
    // FUNÇÃO NÃO PEGA ASYNC
     function nivel($req, $res, $next) {
        try {
            $user =  UsuarioModel::findOne(array("email" => $_SESSION["usuario"]));
            if ($user && $user["nivel"] === 3) {
                $next();
            } else {
                header("Location: /usuarios/cadastrar");
                exit;
            }
        } catch (Exception $error) {
            echo "Erro ao verificar o nível do usuário: " . $error->getMessage();
            header("Location: /usuarios/login");
            exit;
        }
    }

}

