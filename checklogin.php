<?php 

    include_once "connection.php";

    $link = GetMyConnection();

	$sql = 'SELECT * FROM Users WHERE (Username = "'.$_POST["username"].'" AND Password = "'.$_POST["password"].'")';

	$result = mysqli_query($link, $sql) //ver funcao "extract"
		or die('Login Invalido!' . mysqli_error($link));
	$number = mysqli_num_rows($result); //se retornar 1, significa que � um utilizador valido
	
	$result = mysqli_fetch_array($result);

	switch ($result['Perfil']) {

	    case 'paciente':
	        $_SESSION['authuser']=1;
            $_SESSION['nome'] = $result['Nome'];
            $_SESSION['perfil'] = $result['Perfil'];
			$_SESSION['user']=$_POST["username"];
			echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php?operacao=verperfil&id=".$result['UserId']."'>";
	        break;
	    case 'enfermeiro':
	        $_SESSION['authuser']=2;
            $_SESSION['nome'] = $result['Nome'];
            $_SESSION['perfil'] = $result['Perfil'];
			$_SESSION['user']=$_POST["username"];
			echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
	        break;
	    case 'medico':
	        $_SESSION['authuser']=3;
            $_SESSION['nome'] = $result['Nome'];
            $_SESSION['perfil'] = $result['Perfil'];
			$_SESSION['user']=$_POST["username"];
			echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php?operacao=listaespera'>";
	        break;
	    case 'admin':
	    	$_SESSION['authuser']=4;
	    	$_SESSION['nome'] = $result['Nome'];
            $_SESSION['perfil'] = $result['Perfil'];
			$_SESSION['user']=$_POST["username"];
			echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
			break;
		default:
			echo "Login invalido";
			break;
	}
	
	//echo "O VALOR DE SESSION E no check: " . $_SESSION["authuser"] . ".";
	mysqli_close($link);
	
	
?>