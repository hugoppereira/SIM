//mostrar pacientes.
//se não estives registado, fazer registo do pacinete e depois triagme

<?php
include_once "connection.php";

$link = GetMyConnection();

$sql = "SELECT Userid,Nome,DataNascimento,Perfil FROM Users WHERE(Perfil = 'paciente')";
$result = $link->query($sql);

?>
<table id="listprofiles" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Perfil</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Perfil</th>
    </tr>
    </tfoot>
    <tbody>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td> <a href='index.php?operacao=adicionartriagem&id=".$row['Userid']."'>".$row["Userid"]."</td><td>" . $row["Nome"]. "</td><td> " . $row["DataNascimento"]. "</td><td> " . $row["Perfil"]."</td></tr>";
        }
    } else {
        echo "0 results";
    }

    $link->close();

    ?>
    </tbody>
</table>