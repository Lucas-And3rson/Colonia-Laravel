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

    <title>Colonia Z-65</title>
</head>
<body>
    @include('partials.cabecalho')

     <!-- Tela Contato -->
     @include('partials.btn-contato')

    <br>


    <section class="banner">
      <h1>VEM SER DA <span>COLÔNIA Z-65</span></h1>
      <video id="background-video" autoplay loop muted poster="img/background.mp4">
      <source src="img/background.mp4" type="video/mp4">
      </video>
    </section>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>
