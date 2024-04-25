Here's the Blade template version of the provided HTML code:

```php
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Colônia Z-65 | Cadastrar Usuários</title>

    <!-- Custom fonts for this template -->
    <link rel="icon" type="image/png" sizes="16x16"  href="/img/favicon-16x16.png">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->

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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Usuários</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Cadastre os Administradores</h6>
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
                                                        <form  action="/usuarios" method="POST">
                                                            <div class="campo">
                                                                <input class="input-claro" type="text" name="nome" id="nome" value="{{ $usuarioUpdate->nome }}" placeholder="Colônia de Pescadores" required>
                                                                <label for="nome">Nome</label>
                                                            </div>
                                                            @if($status == 4)
                                                            <div class="existe">
                                                                Esse email já existe!
                                                            </div>
                                                            @endif
                                                            <div class="campo"  @if($status == 4) style = "background-color: rgb(230, 65, 65); border: 2px solid rgb(230, 65, 65);" @endif>
                                                                <input class="input-claro" type="email" name="email" id="email" value="{{ $usuarioUpdate->email }}" placeholder="colonia@gmail.com" required>
                                                                <label for="email">Email</label>
                                                            </div>
                                                            <div class="campo">
                                                                <input class="input-claro" type="password" name="senha" id="senha" min-length="8" value="{{ $usuarioUpdate->senha }}" placeholder="G%4fsa85@s"  min-length="8" required >
                                                                <label for="senha">Senha</label>
                                                            </div>
                                                            <div class="campo">
                                                                <input type="radio" id="nivel1" name="nivel" value="1">
                                                                <label for="nivel1">Nível 1</label>
                                                                 <input type="radio" id="nivel2" name="nivel" value="2">
                                                                <label for="nivel2">Nível 2</label>
                                                                 <input type="radio" id="nivel3" name="nivel" value="3">
                                                                <label for="nivel3">Nível 3</label>
                                                            </div>
                                                            <input type="hidden" name="_id" value="{{ $usuarioUpdate->_id }}">
                                                            <input class="btn btn-primary btn-user btn-block" value="{{ $usuarioUpdate->_id != undefined ? 'Editar' : 'Cadastrar' }}" type="submit" class="cadastrar">
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
            @include("../partials.menubaixo")

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

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
    <
