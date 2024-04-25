<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Colônia Z-65 | Cadastrar Clientes</title>
    <!-- Custom fonts for this template -->
    <link rel="icon" type="image/png" sizes="16x16"  href="/img/favicon-16x16.png">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <!-- Content Wrapper -->
        <!-- Menu Lateral -->
        @include('../partials.menulateral')
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('../partials.menutopo')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Clientes</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Cadastre o Cliente e gere seu boleto</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="container">
                                    <div class="card o-hidden border-0 shadow-lg my-5">
                                        <div class="card-body p-0">
                                            <!-- Nested Row within Card Body -->
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <div class="p-5">
                                                        <div class="text-center">
                                                            <h1 class="h4 text-gray-900 mb-4">Preencha este formulário</h1>
                                                        </div>
                                                        <form  action="/clientes" method="POST">
                                                            <div class="campo">
                                                                <input class="input-claro" type="text" name="nome" id="nome" value="{{ $clienteUpdate->nome ?? '' }}" placeholder="" required>
                                                                <label for="nome">Nome Completo</label>
                                                            </div>
                                                            @if($status == 4)
                                                                <div class="existe">
                                                                    Esse CPF já foi cadastrado!
                                                                </div>
                                                            @endif
                                                            <div class="campo">
                                                                <input class="input-claro" oninput="mascara(this)" type="text" minlength="14" maxlength="14" name="cpf" id="cpf" value="{{ $clienteUpdate->cpf ?? '' }}" placeholder="999.999.999-99">
                                                                <label for="cpf">CPF</label>
                                                            </div>
                                                            @if(isset($clienteUpdate->id))
                                                                <div class="campo">
                                                                    <input type="radio" id="tipo1" name="tipo" value="preenchido" required>
                                                                    <label for="tipo1">Boleto preenchido</label>
                                                                    <input type="radio" id="tipo2" name="tipo" value="branco" required>
                                                                    <label for="tipo2">Boleto em branco</label>
                                                                    <input type="radio" id="tipo3" name="tipo" value="capa" required>
                                                                    <label for="tipo3">Capa</label>
                                                                </div>
                                                                <div class="campo">
                                                                    <select class="input-claro" id="mes" name="mes" value="" required>
                                                                        <option value="3">3</option>
                                                                        <option value="6">6</option>
                                                                        <option value="9">9</option>
                                                                        <option value="12">12</option>
                                                                    </select>
                                                                    <label for="mes">Meses</label>
                                                                </div>
                                                            @endif
                                                            <input type="hidden" name="_id" value="{{ $clienteUpdate->_id ?? '' }}">
                                                            <input type="submit" class="btn btn-primary btn-user btn-block" value="{{ isset($clienteUpdate->id) ? 'Editar' : 'Cadastrar' }}">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            @include('../partials.menubaixo')
        </div>
        <!-- End of Content Wrapper -->
    </div>
</div>
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="/js/demo/datatables-demo.js"></script>
<script src="/js/gerar.js"></script>
</body>
</html>
