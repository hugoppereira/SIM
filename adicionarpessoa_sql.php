<?php
if (isset($_POST['guardar'])) {

    $nome   = $_POST['nome'];
    $morada  = $_POST['morada'];
    $telefone = $_POST['telefone'];
    $sexo    = $_POST['sexo'];
    $datanasc       = $_POST['datanasc'];
    $nif    = $_POST['nif'];
    $username      = $_POST['username'];
    $pass     = $_POST['pass'];
    if(isset($_SESSION['perfilaux'])){
        $perfil = 'paciente';
    }else {
        $perfil = $_SESSION['perfil'];
    }

    include_once "connection.php";

    $link = GetMyConnection();

    $sql = "INSERT INTO Users (Nome, Morada, Contacto, Sexo, DataNascimento, NIF, Username, Password, Perfil) VALUES ('".$nome."','".$morada."','".$telefone."','".$sexo."','".$datanasc."','".$nif."','".$username."','".$pass."','".$perfil."')";
    $sql1 = "SELECT Userid FROM Users ORDER BY Userid DESC LIMIT 1";
    $result = mysqli_query($link,$sql);
    $result1 = mysqli_query($link,$sql1);
    $result1 = mysqli_fetch_array($result1);
    $iduser = $result1['Userid'];

    if($result==0){
        echo "<table>"; //comecar uma tabela
        echo '<tr><td>&nbsp;</td></tr>';
        echo '<tr><td>Erro ao adicionar utilizador!</td></tr>';
        echo "An error has occurred: " . mysqli_error($link);
        echo "</table>"; //fechar a tabela
        exit;
    } else {
        echo "<table>"; //comecar uma tabela
        echo '<tr><td>&nbsp;</td></tr>';
        echo '<tr><td>Utilizador inserido com sucesso!</td></tr>';
        echo "</table>"; //fechar a tabela
    }

    mysqli_close($link);
}

if (isset($_SESSION['perfilaux'])){
    unset($_SESSION['perfilaux']);
    $url = "index.php?operacao=adicionartriagem&id=$iduser";
    echo header('Location: ' . $url);
}else {
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
}
?>