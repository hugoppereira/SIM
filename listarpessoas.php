<?php
include_once "connection.php";

$link = GetMyConnection();

$sql = "SELECT Userid,Nome,DataNascimento,Perfil FROM Users";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='4', align='center',><tr><th>ID</th><th>Nome</th><th>Data de Nascimento</th><th>Perfil</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> <a href='index.php?operacao=verperfil?id=".$row['Userid']."'>".$row["Userid"]."</td><td>" . $row["Nome"]. "</td><td> " . $row["DataNascimento"]. "</td><td> " . $row["Perfil"]."</td></tr>";
    }
//<?php echo "<a href='profile.php?id=".$row['pupil_id']."'>link</a>";

    echo "</table>";
} else {
    echo "0 results";
}
$link->close();

?>