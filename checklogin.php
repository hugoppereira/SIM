<?php 

    include_once "connection.php";


	mysqli_select_db(GetMyConnection(),'trialfct')
		or die('Nao foi possi�vel seleccionar a base de dados');
	
	$sql = 'SELECT * FROM USERS WHERE (user = "'.$_POST["username"].'" AND pass = "'.$_POST["password"].'")';

	$result = mysqli_query($g_link, $sql) //ver funcao "extract"
		or die('Login Invalido!' . mysqli_error($g_link));

	$number = mysqli_num_rows($result); //se retornar 1, significa que � um utilizador valido
	
	$result = mysqli_fetch_array($result);
	

	switch ($result['tipo']) {

	    case 'paciente':
	        $_SESSION['authuser']=1;
			$_SESSION['user']=$_POST["username"];
			echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
	        break;
	    case 'enfermeiro':
	        $_SESSION['authuser']=2;
			$_SESSION['user']=$_POST["username"];
			echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
	        break;
	    case 'medico':
	        $_SESSION['authuser']=3;
			$_SESSION['user']=$_POST["username"];
			echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
	        break;
	    case 'admin':
	    	$_SESSION['authuser']=4;
			$_SESSION['user']=$_POST["username"];
			echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
			break;
		default:
			echo "Login invalido";
			break;
	}
	
	//echo "O VALOR DE SESSION E no check: " . $_SESSION["authuser"] . ".";
	mysqli_close($g_link);
	
	
?>