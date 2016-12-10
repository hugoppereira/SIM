<?php

include_once "connection.php";
$identity=$_GET['id'];

$link = GetMyConnection();

$sql = "SELECT * FROM Users where UserID = $identity";
$result = $link->query($sql);
$result = mysqli_fetch_array($result);

?>

<div class="row">
    <h1>Ficha de Utilizador</h1>
    <div class="col-md-6">
        teste
    </div>
</div>


Array ( [0] => 1 [UserId] => 1 [1] => ze [Nome] => ze [2] => [Morada] => [3] => 0 [Contacto] => 0 [4] => [Sexo] => [5] => [DataNascimento] => [6] => [NIF] => [7] => ze [Username] => ze [8] => 1234 [Password] => 1234 [9] => [Perfil] => )