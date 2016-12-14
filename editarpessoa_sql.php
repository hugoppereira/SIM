<?php
include_once "connection.php";

$link = GetMyConnection();
echo $_POST['identity'];
$sql = "UPDATE Users 
        SET Nome ='".$_POST['nome']."', Morada ='".$_POST['morada']."', Contacto='".$_POST['telefone']."', Sexo = '".$_POST['sexo']."',
         DataNascimento='".$_POST['datanasc']."',NIF = '".$_POST['nif']."',Username = '".$_POST['username']."',Password = '".$_POST['pass']."',Perfil = '".$_POST['perfil']."'
        WHERE UserID ='".$_POST['identity']."'";

$result = mysqli_query($link,$sql);

if($result==0){
    echo "<table>"; //comecar uma tabela
    echo '<tr><td>&nbsp;</td></tr>';
    echo '<tr><td>Erro ao editar utilizador!</td></tr>';
    echo "An error has occurred: " . mysqli_error($link);
    echo "</table>"; //fechar a tabela
} else {
    echo "<table>"; //comecar uma tabela
    echo '<tr><td>&nbsp;</td></tr>';
    echo '<tr><td>Utilizador editado com sucesso!</td></tr>';
    echo "</table>"; //fechar a tabela
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
}

mysqli_close($link);
?>