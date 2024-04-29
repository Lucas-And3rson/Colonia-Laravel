<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Colônia Z-65 | Gerar Boleto</title>

    <!-- Custom fonts for this template -->
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/impressora.css" media="print">
    <!-- Custom styles for this page -->
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Content Wrapper -->
        <!-- Menu Lateral -->
        @include("../partials.menulateral")

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include("../partials.menutopo")
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="content-listar">
                        @php
                            $mes = $c->mes;
                            $data = now();
                            $meses = [
                                "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
                                "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
                            ];
                            $anoAtual = $data->format('Y');
                            $diaAtual = $data->format('d');
                        @endphp

                        @for ($i = 0; $i < $mes; $i++)
                            @if ($c->tipo === "capa")
                                <div class="card__capa">
                                    <div class="card__left__capa">
                                        <img src="/img/Logo-Colonia (2).png" alt="logo">
                                    </div>
                                    <div class="card__right__capa">
                                        <div class="informacoes">
                                            <p>
                                                Filiada à Federação dos Pescadores e Aquicultores e à Confederação Nacional dos Pescadores e Aquicultores - CNPJ: 54.709.881/0001-43
                                            </p>
                                            <div class="pix">
                                                <span class="nome__capa">Nome</span>
                                                <div class="mini-pix">
                                                    <img src="/img/pix.jpeg" alt="logo">
                                                    <span>PIX</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__capa">
                                    <div class="card__left__capa">
                                    </div>
                                    <div class="card__right__capa">
                                        <div class="informacoes">
                                        </div>
                                    </div>
                                </div>
                            @else
                                @if ($c->tipo === "preenchido")
                                    <div class="card">
                                        <div class="card__left">
                                            <img src="/img/Logo-Colonia (2).png" alt="logo">
                                            <div class="informacoes">
                                                <p>
                                                    Filiada à Federação dos Pescadores e Aquicultores e à Confederação Nacional dos Pescadores e Aquicultores - CNPJ: 54.709.881/0001-43
                                                </p>
                                                <span>{{ $c->nome }}</span>
                                                <p><span>CPF:</span> {{ $c->cpf }}</p>
                                                <p><span>Valor a pagar:</span> R$20,00</p>
                                                @php
                                                    if ($data->month === 1) { // 11 representa dezembro
                                                        $nomeDoMes = $meses[0]; // Próximo mês é janeiro
                                                        $anoAtual++; // Incrementando o ano
                                                    } else {
                                                        $nomeDoMes = $meses[$data->month - 1]; // Obtendo o nome do mês atual
                                                    }
                                                    $data->addMonth();
                                                @endphp
                                                <p><span>Data Referente:</span> {{ $diaAtual }} de {{ $nomeDoMes }} de {{ $anoAtual }}</p>
                                            </div>
                                        </div>
                                        <div class="card__right">
                                            <img src="/img/Logo-Colonia (2).png" alt="logo">
                                            <div class="informacoes">
                                                <p>
                                                    Filiada à Federação dos Pescadores e Aquicultores e à Confederação Nacional dos Pescadores e Aquicultores - CNPJ: 54.709.881/0001-43
                                                </p>
                                                <span>{{ $c->nome }}</span>
                                                <p><span>CPF:</span> {{ $c->cpf }}</p>
                                                <p><span>Valor a pagar:</span> R$20,00</p>
                                                <p><span>Data Referente:</span> {{ $diaAtual }} de {{ $nomeDoMes }} de {{ $anoAtual }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @elseif ($c->tipo === "branco")
                                    <div class="card">
                                        <div class="card__left">
                                            <img src="/img/Logo-Colonia (2).png" alt="logo">
                                            <div class="informacoes">
                                                <p>
                                                    Filiada à Federação dos Pescadores e Aquicultores e à Confederação Nacional dos Pescadores e Aquicultores - CNPJ: 54.709.881/0001-43
                                                </p>
                                                <span>Nome: ________________</span>
                                                <span>CPF: ________________</span>
                                                <p><span>Valor a pagar:</span> R$20,00</p>
                                                @php
                                                    if ($data->month === 1) { // 11 representa dezembro
                                                        $nomeDoMes = $meses[0]; // Próximo mês é janeiro
                                                        $anoAtual++; // Incrementando o ano
                                                    } else {
                                                        $nomeDoMes = $meses[$data->month - 1]; // Obtendo o nome do mês atual
                                                    }
                                                    $data->addMonth();
                                                @endphp
                                                <p><span>Data Referente:</span> {{ $diaAtual }} de {{ $nomeDoMes }} de {{ $anoAtual }}</p>
                                            </div>
                                        </div>
                                        <div class="card__right">
                                            <img src="/img/Logo-Colonia (2).png" alt="logo">
                                            <div class="informacoes">
                                                <p>
                                                    Filiada à Federação dos Pescadores e Aquicultores e à Confederação Nacional dos Pescadores e Aquicultores - CNPJ: 54.709.881/0001-43
                                                </p>
                                                <span>Nome: ________________</span>
                                                <span>CPF: ________________</span>
                                                <p><span>Valor a pagar:</span> R$20,00</p>
                                                <p><span>Data Referente:</span> {{ $diaAtual }} de {{ $nomeDoMes }} de {{ $anoAtual }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endif
                        @endfor

                        <div class="card__acoes">
                            <button onclick="imprimirTela()" class="btn btn-success btn-icon-split btn-sm">
                                <span class='icon text-white-50'>
                                    <i class='fas fa-eye'></i>
                                </span>
                                <span class="text">Imprimir</span>
                            </button>
                            <a href="/cliente/cadastrar/{{ $c->id }}" class='btn btn-primary btn-icon-split btn-sm'>
                                <span class='icon text-white-50'>
                                    <i class='fas fa-pen'></i>
                                </span>
                                <span class="text">Editar</span>
                            </a>
                        </div>
                    </div>
                </div>
                @include("../partials.menubaixo")
            </div>
        </div>
        <script>
            function imprimirTela() {
                window.print();
            }
        </script>
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
