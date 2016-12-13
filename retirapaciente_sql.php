<?php

include_once "connection.php";

$link = GetMyConnection();

$sql = "SELECT Users.userid, Users.nome, Triagem.triagemid,  Triagem.horasaida, Triagem.triagem 
        FROM Triagem, Users 
        WHERE Users.userid = Triagem.userid and Triagem.emespera = 1 
        ORDER BY  Triagem.horasaida ASC, Triagem.triagem DESC LIMIT 1";

$result = $link->query($sql);
//$result = mysqli_fetch_array($result);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {   //loop para percorrer os valores
        echo "<table><tr><td align='center'>Chamado paciente com ID: " . $row['userid'] . "</td>
        <td align='center'>Chamado triagem com ID: " . $row['triagemid'] . "</td></tr></table>";
        $triaid = $row['triagemid'];
    }
    $sql = "UPDATE Triagem SET emespera = 0 WHERE triagemid = $triaid";
    echo $sql;
    $result = $link->query($sql);
    mysqli_close($link);
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php?operacao=listaespera'>";
}else{
    echo 'Não existe pacientes em espera';


}



?>