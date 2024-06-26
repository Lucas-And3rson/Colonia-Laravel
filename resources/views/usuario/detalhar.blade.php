<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhar Usuário</title>
</head>
<body>
    @include("../partials/cabeçalho")
    <div class="content-listar">
        <div class="card">
            <div class="card__left">
                <div class="id-absolute">
                    <span>{{ $u->id }}</span>
                </div>
                <img src="../img/person.jpg" alt="default">
            </div>
            <div class="card__right">
                <div class="informacoes">
                    <span>{{ $u->nome }}</span>
                    <p>{{ $u->email }}</p>
                    <p>{{ $u->senha }}</p>
                </div>
                <div class="acoes">
                    <div class="icon-delete" onclick="return confirm('Você tem certeza que deseja deletar esse Usuario?')">
                        <a href="/usuario/deletar/{{ $u->id }}">
                            <span class="material-symbols-outlined">
                                delete
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
