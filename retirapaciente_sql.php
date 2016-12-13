<?php

include_once "connection.php";

$link = GetMyConnection();

$sql = "SELECT Users.userid, Users.nome, Triagem.triagemid,  Triagem.horasaida, Triagem.triagem 
        FROM Triagem, Users 
        WHERE Users.userid = Triagem.userid 
        ORDER BY  Triagem.horasaida ASC, Triagem.triagem DESC LIMIT 1";

$result = $link->query($sql);
//$result = mysqli_fetch_array($result);
echo "An error has occurred1: " . mysqli_error($link);
if ($result->num_rows > 0) {
    echo "An error has occurred2: " . mysqli_error($link);
    while ($row = $result->fetch_assoc()) {   //loop para percorrer os valores
        echo "<table><tr><td align='center'>Chamado paciente com ID: " . $row['userid'] . "</td>
        <td align='center'>Chamado triagem com ID: " . $row['triagemid'] . "</td></tr></table>";
        $triaid = $row['triagemid'];
    }
}
echo "An error has occurred3: " . mysqli_error($link);



    $sql = "UPDATE Triagem SET emespera = 0 WHERE triagemid = $triaid";
    echo $sql;
    $result = $link->query($sql);

    mysqli_close($link);


?>