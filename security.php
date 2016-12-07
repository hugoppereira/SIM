<?php

function checkPermissions() {



}

function checkLogin($tipo) {


    switch ($tipo) {

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

}


?>