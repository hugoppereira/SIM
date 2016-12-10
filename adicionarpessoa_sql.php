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
    $perfil = $_SESSION['perfil'];

    include_once "connection.php";

    $link = GetMyConnection();


    $sql = "INSERT INTO Users (Nome, Morada, Contacto, Sexo, DataNascimento, NIF, Username, Password, Perfil) VALUES ('".$nome."','".$morada."','".$telefone."','".$sexo."','".$datanasc."','".$nif."','".$username."','".$pass."','".$perfil."')";
    //$sql = "INSERT INTO teste VALUES (1,'".$nome."')";
    $result = mysqli_query($link,$sql);


    if($result==0){
        echo "<table>"; //comecar uma tabela
        echo '<tr><td>&nbsp;</td></tr>';
        echo '<tr><td>Erro ao adicionar utilizador!</td></tr>';
        echo "An error has occurred: " . mysqli_error($link);
        echo "</table>"; //fechar a tabela
    } else {
        echo "<table>"; //comecar uma tabela
        echo '<tr><td>&nbsp;</td></tr>';
        echo '<tr><td>Utilizador inserido com sucesso!</td></tr>';
        echo $perfil;
        echo "</table>"; //fechar a tabela
    }

    mysqli_close($link);
}
echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
?>