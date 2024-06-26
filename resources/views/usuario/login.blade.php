<!DOCTYPE html>
<html id="cadastro" lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('/css/cadastroUsuario.css') }}">
    <title>Login Usuario</title>
</head>

<body>
    <main>
        <section id="login">
            <div id="imagem">
                <!-- Aqui vai a imagem nas CSS -->
            </div>
            <div id="formulario">
                <h1>Login</h1>
                <p>Acesse aqui sua conta.</p>
                <form  action="/usuarios/login" method="POST">
                    @if($stats == 5)
                        <div class="existe">
                            Email inválido!
                        </div>
                    @endif
                    <div class="campo"  @if($stats == 5) style = "background-color: rgb(230, 65, 65); border: 2px solid rgb(230, 65, 65);" @endif>
                        <i class="material-symbols-outlined">mail</i>
                        <input type="email" name="email" id="email" value="{{ $usuarioLogado->email }}" placeholder="Seu email" required>
                        <label for="email">Email</label>
                    </div>
                    @if($stats == 6)
                        <div class="existe">
                            Senha inválida!
                        </div>
                    @endif
                    <div class="campo"  @if($stats == 6) style = "background-color: rgb(230, 65, 65); border: 2px solid rgb(230, 65, 65);" @endif>
                        <i class="material-symbols-outlined">visibility</i>
                        <input type="password" name="senha" id="senha" placeholder="Sua senha" min-length="8" required >
                        <label for="senha">Senha</label>
                    </div>
                    <input value="Entrar" type="submit" class="cadastrar">
                </form>
            </div>
        </section>
    </main>
</body>

</html>
