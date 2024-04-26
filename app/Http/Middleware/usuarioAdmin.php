<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\UsuarioModel; // Certifique-se de importar o modelo de usuário corretamente
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class usuarioAdmin
{
    public function handle($request, Closure $next)
    {
        try {
            $user = UsuarioModel::where('email', $request->session()->get('usuario'))->first();

            if ($user && $user->nivel >= 2) {
                return $next($request);
            } else {
                return redirect()->route('usuarios.cadastrar');
            }
        } catch (\Exception $error) {
            // Você pode lidar com o erro conforme necessário, como registrar em logs
            \Log::error('Erro ao verificar o nível do usuário: ' . $error->getMessage());
            return redirect()->route('usuarios.login');
        }
    }
}
