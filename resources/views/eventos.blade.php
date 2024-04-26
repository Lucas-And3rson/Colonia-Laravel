<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16"  href="/img/favicon-16x16.png">
    <link rel="stylesheet" href="/css/index.css">

    <!-- Custom styles for this template -->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

    <title>Colonia Z-65 | Eventos</title>
</head>
<body>
    @include('partials.cabecalho')

    <!-- Tela Contato -->
    @include('partials.btn-contato')

    <br>

    <video id="background-video" autoplay loop muted poster="img/background.mp4">
        <source src="img/background.mp4" type="video/mp4">
    </video>

    <div class="titulo">
        <h3>Imagens</h3>
    </div>
    <section class="flex">
        <div class="scale">
            <img src="/img/eventos/Event3.jpeg" alt="Evento 3">
        </div>
        <div class="scale">
            <img src="/img/eventos/Event4.jpeg" alt="Evento 4">
        </div>
        <div class="scale">
            <img src="/img/eventos/Event5.jpeg" alt="Evento 5">
        </div>
        <div class="scale">
            <img src="/img/eventos/Event6.jpeg" alt="Evento 6">
        </div>
        <div class="scale">
            <img src="/img/eventos/Event7.jpeg" alt="Evento 7">
        </div>
    </section>
    <div class="titulo">
        <h3>Vídeos</h3>
    </div>
    <section class="flex">
        <div class="scale">
            <video controls><source src="/img/eventos/video1.mp4" type="video/mp4"></video>
        </div>
        <div class="scale">
            <video controls><source src="/img/eventos/video2.mp4" type="video/mp4"></video>
        </div>
    </section>

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>
