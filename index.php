<?php

session_start()

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sistema InformaÃ§Ã¥o Medica</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Custom css -->
    <link href="css/sim.css" rel="stylesheet">
    <!-- dataTables css -->
    <link href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css">





    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="html5shiv.min.js"></script>
    <script src="respond.min.js"></script>
    <![endif]-->
</head>


<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">TriaFCT</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <?php

                if (isset($_SESSION['authuser']) && isset($_SESSION['perfil']) && isset($_SESSION['nome'])) {

                    if ($_SESSION['authuser'] == 1) {    //paciente

                        echo '<li><a href="index.php?operacao=checklogout">Logout</a></li>';
                        echo '<li><a>Nome: ' . $_SESSION['nome'] . ' </a></li>';
                        echo '<li><a>Perfil: ' . $_SESSION['perfil'] . ' </a></li>';


                    }
                    if ($_SESSION['authuser'] == 2) {    //enfermeiro

                        echo '<li class="dropdown">';
                        echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gerir Pessoal<span class="caret"></span></a>';
                        echo '<ul class="dropdown-menu">';
                        echo '<li><a href="index.php?operacao=listarpessoas">Listar Pessoas</a></li>';
                        echo '</ul>';
                        echo '</li>';
                        echo '<li class="dropdown">';
                        echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Triagem <span class="caret"></span></a>';
                        echo '<ul class="dropdown-menu">';
                        echo '<li><a href="index.php?operacao=triagem">Nova Triagem</a></li>';
                        echo '<li><a href="#">Editar Triagem</a></li>';
                        echo '<li><a href="index.php?operacao=listaespera">Lista de espera</a></li>';
                        echo '</ul>';
                        echo '</li>';

                        echo '<li><a href="index.php?operacao=checklogout">Logout</a></li>';
                        echo '<li><a>Nome: ' . $_SESSION['nome'] . ' </a></li>';
                        echo '<li><a>Perfil: ' . $_SESSION['perfil'] . ' </a></li>';
                    }
                    if ($_SESSION['authuser'] == 3) {    //medico
                        echo '<li class="dropdown">';
                        echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Triagem <span class="caret"></span></a>';
                        echo '<ul class="dropdown-menu">';
                        echo '<li><a href="index.php?operacao=listaespera">Lista de espera</a></li>';
                        echo '</ul>';
                        echo '</li>';
                        echo '<li><a href="index.php?operacao=checklogout">Logout</a></li>';
                        echo '<li><a>Nome: ' . $_SESSION['nome'] . ' </a></li>';
                        echo '<li><a>Perfil: ' . $_SESSION['perfil'] . ' </a></li>';
                    }
                    if ($_SESSION['authuser'] == 4) {    //admin
                        echo '<li class="dropdown">';
                        echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gerir Pessoal<span class="caret"></span></a>';
                        echo '<ul class="dropdown-menu">';
                        echo '<li><a href="index.php?operacao=adicionarpessoa">Nova Pessoa</a></li>';
                        echo '<li><a href="index.php?operacao=listarpessoas">Listar Pessoas</a></li>';
                        echo '<li><a href="index.php?operacao=editarpessoa">Editar Pessoa</a></li>';
                        echo '</ul>';
                        echo '</li>';
                        echo '<li class="dropdown">';
                        echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Triagem <span class="caret"></span></a>';
                        echo '<ul class="dropdown-menu">';
                        echo '<li><a href="index.php?operacao=triagem">Nova Triagem</a></li>';
                        echo '<li><a href="#">Editar Triagem</a></li>';
                        echo '<li><a href="index.php?operacao=listaespera">Lista de espera</a></li>';
                        echo '</ul>';
                        echo '</li>';
                        echo '<li><a href="index.php?operacao=checklogout">Logout</a></li>';
                        echo '<li><a>Nome: ' . $_SESSION['nome'] . ' </a></li>';
                        echo '<li><a>Perfil: ' . $_SESSION['perfil'] . ' </a></li>';

                    }


                    if ($_SESSION['authuser'] != 1 && $_SESSION['authuser'] != 2 && $_SESSION['authuser'] != 3 && $_SESSION['authuser'] != 4) {
                        echo '<li><a href="index.php?operacao=showlogin">Login</a></li>';
                    }

                } else {
                    echo '<li><a href="index.php?operacao=showlogin">Login</a></li>';
                }
                ?>
            </ul>

        </div><!--/.nav-collapse -->

    </div>
</nav>

<div class="container theme-showcase" role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" align="center">
        <h1>Hospital FCT</h1>
    </div>

    <!--    <div class="page-header">-->
    <!--        <h1>Nova Triagem</h1>-->
    <!--    </div>-->

    <?php
    if (isset($_GET['operacao'])) {

        if ($_GET['operacao'] == 'showlogin')
            include 'showlogin.php';
        if ($_GET['operacao'] == 'checklogin')
            include 'checklogin.php';
        if ($_GET['operacao'] == 'checklogout')
            include 'checklogout.php';
        if ($_GET['operacao'] == 'adicionarpessoa')
            include 'adicionarpessoa.php';
        if ($_GET['operacao'] == 'adicionarpessoa_sql')
            include 'adicionarpessoa_sql.php';
        if ($_GET['operacao'] == 'adicionarpessoa_form')
            include 'adicionarpessoa_form.php';
        if ($_GET['operacao'] == 'listarpessoas')
            include 'listarpessoas.php';
        if ($_GET['operacao'] == 'editarpessoa')
            include 'editarpessoa.php';
        if ($_GET['operacao'] == 'editarpessoa_sql')
            include 'editarpessoa_sql.php';
        if ($_GET['operacao'] == 'verperfil')
            include 'verperfil.php';
        if ($_GET['operacao'] == 'triagem')
            include 'triagem.php';
        if ($_GET['operacao'] == 'adicionartriagem')
            include 'adicionartriagem.php';
        if ($_GET['operacao'] == 'atribuicor')
            include 'atribuicor.php';
        if ($_GET['operacao'] == 'adicionartriagem_sql')
            include 'adicionartriagem_sql.php';
        if ($_GET['operacao'] == 'listaespera')
            include 'listaespera.php';
        if ($_GET['operacao'] == 'retirapaciente_sql')
            include 'retirapaciente_sql.php';


    } else {
    }
    ?>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- data tables jquery -->
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<!-- data tables bootstrap -->
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/i18n/defaults-*.min.js"></script>

<script>
    $(document).ready(function () {
        $('#listprofiles').DataTable();
        $('#datanasc').datepicker({ format: "yyyy-mm-dd" });
        $('#selectpicker').selectpicker({
            style: 'btn-info',
            size: 4
        });
    });
</script>


</body>
</html>
