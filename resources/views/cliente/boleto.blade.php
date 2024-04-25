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
    <link rel="icon" type="image/png" sizes="16x16"  href="{{ asset('img/favicon-16x16.png') }}">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/impressora.css') }}" media="print">
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <!-- Content Wrapper -->
        <!-- Menu Lateral -->
        @include('partials.menulateral')

        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('partials.menutopo')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="content-listar">
                        @foreach($colonia as $c)
                            @if($c->tipo === "capa")
                                <div class="card">
                                    <div class="card__left">
                                        <img src="{{ asset('img/Logo-Colonia (2).png') }}" alt="logo">
                                    </div>
                                    <div class="card__right">
                                        <span>{{ $c->nome }}</span>
                                        <div class="informacoes">
                                            <div class="pix">
                                                <span>PIX</span>
                                                <img src="{{ asset('img/Logo-Colonia (2).png') }}" alt="logo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="card">
                                    <div class="card__left">
                                        <img src="{{ asset('img/Logo-Colonia (2).png') }}" alt="logo">
                                        <div class="informacoes">
                                            <p>
                                                Filiada à Federação dos Pescadores e Aquicultores e à Confederação Nacional dos Pescadores e Aquicultores - CNPJ: 54.709.881/0001-43
                                            </p>
                                            <span>{{ $c->nome }}</span>
                                            <p>{{ $c->cpf }}</p>
                                            <p>R$20,00</p>
                                        </div>
                                    </div>
                                    <div class="card__right">
                                        <img src="{{ asset('img/Logo-Colonia (2).png') }}" alt="logo">
                                        <div class="informacoes">
                                            <p>
                                                Filiada à Federação dos Pescadores e Aquicultores e à Confederação Nacional dos Pescadores e Aquicultores - CNPJ: 54.709.881/0001-43
                                            </p>
                                            <span>{{ $c->nome }}</span>
                                            <p>{{ $c->cpf }}</p>
                                            <p>R$20,00</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <div class="card__acoes">
                            <button onclick="imprimirTela()" class="btn btn-success btn-icon-split btn-sm">
                                <span class='icon text-white-50'>
                                    <i class='fas fa-eye'></i>
                                </span>
                                <span class="text">Imprmir</span>
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
                @include('partials.menubaixo')
            </div>
        </div>
    </div>
    <script>
        function imprimirTela() {
          window.print();
        }
    </script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

