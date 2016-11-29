<?php 
	$link = mysql_connect('localhost', 'root', '')
		or die('Nao foi possi­vel ligar: ' . mysql_error());
		
	mysql_select_db('trialfct')
		or die('Nao foi possi­vel seleccionar a base de dados');
	
	$sql = 'SELECT * FROM USERS WHERE (user = "'.$_POST["username"].'" AND pass = "'.$_POST["password"].'")';

	$result = mysql_query ($sql) //ver funcao "extract"
		or die('Login Invalido!' . mysql_error());

	$number = mysql_num_rows($result); //se retornar 1, significa que é um utilizador valido
	
	$result = mysql_fetch_array($result);
	
	
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
	
	
	
	mysql_close();
	
	
?>