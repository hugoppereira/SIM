<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Logout</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="html5shiv.min.js"></script>
    <script src="respond.min.js"></script>
    <![endif]-->
</head>


<body>

		<form method="post">
		<div align="center">
			<p> <br>Tem a certeza?</p>
			<button type="submit" name="submityes" class="btn btn-lg btn-danger">Sim</button>

			<button type="submit" name="submitno" class="btn btn-lg btn-default">Não</button>
        </div>
		<?php
			if(isset($_POST['submityes'])){
				include 'logout.php';
			} 
			if(isset($_POST['submitno'])){
				echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
			} 
		?>
			
		</form>	
	


</body>