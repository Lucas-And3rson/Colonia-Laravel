<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('index.php') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('img/Logo-Colonia (2).png') }}" alt="logo" width="65px" height="65px">
        </div>
        <div class="sidebar-brand-text mx-3">Colônia Z-65</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/hub') }}">
            <i class="fas fa-home"></i>
            <span>Inicio</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFluxo"
            aria-expanded="true" aria-controls="collapseFluxo">
            <i class="fas fa-piggy-bank"></i>
            <span>Clientes</span>
        </a>
        <div id="collapseFluxo" class="collapse" aria-labelledby="headingFluxo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tipos:</h6>
                <a class='collapse-item' href='{{ url('/clientes/cadastrar') }}'>Cadastrar</a>
                <a class='collapse-item' href='{{ url('/clientes') }}'>Histórico</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsuario"
            aria-expanded="true" aria-controls="collapseUsuario">
            <i class="fas fa-fw fa-male"></i>
            <span>Usuário</span>
        </a>
        <div id="collapseUsuario" class="collapse" aria-labelledby="headingUsuario"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tipos:</h6>
                <a class='collapse-item' href='{{ url('/usuarios/cadastrar') }}'>Cadastrar</a>
                <a class='collapse-item' href='{{ url('/usuarios') }}'>Listar</a>
            </div>
        </div>
    </li>

</ul>
