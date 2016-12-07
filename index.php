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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Utilizadores <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Nova Utilizador</a></li>
                        <li><a href="#">Editar Utilizador</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </li>
                
                <?php
                
					if(isset($_SESSION['authuser'])){
						
						if ($_SESSION['authuser']==1){	//paciente
							echo '<li><a href="index.php?operacao=checklogout">Logout</a></li>';
						}
						if ($_SESSION['authuser']==2){	//enfermeiro
							
							echo '<li class="dropdown">';
                    			echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Triagem <span class="caret"></span></a>';
								echo '<ul class="dropdown-menu">';
                           			echo '<li><a href="#">Nova Triagem</a></li>';
                            		echo '<li><a href="#">Editar Triagem</a></li>';
                    			echo '</ul>';
                			echo '</li>';
						
							echo '<li><a href="index.php?operacao=checklogout">Logout</a></li>';
						}
						if ($_SESSION['authuser']==3){	//medico
							echo '<li><a href="index.php?operacao=checklogout">Logout</a></li>';
						}
						if ($_SESSION['authuser']==4){	//admin
							echo '<li><a href="index.php?operacao=checklogout">Logout</a></li>';
						}

						
						if ($_SESSION['authuser']!=1 && $_SESSION['authuser']!=2 && $_SESSION['authuser']!=3 && $_SESSION['authuser']!=4){
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
    <div class="jumbotron">
        <h1>Hospital FCT</h1>
        <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
    </div>

    <div class="page-header">
        <h1>Nova Triagem</h1>
    </div>
    
    <?php 
			if (isset($_GET['operacao'])){
					
				if ($_GET['operacao']=='showlogin')
					include 'showlogin.php';
				if ($_GET['operacao']=='checklogin') 
					include 'checklogin.php';			
				if ($_GET['operacao']=='checklogout') 
					include 'checklogout.php';
			
			}else{
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
</body>
</html>
