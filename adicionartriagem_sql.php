<?php


//calcula o tempo de espera dependendo da cor atribuida.
//recebe as variaveis session e mete na base de dados
//

    if($_SESSION['class'] == 1)
        $horasaida = date('Y-m-d H:i:s', strtotime('+4 hours'));
    if($_SESSION['class'] == 2)
        $horasaida = date('Y-m-d H:i:s', strtotime('+2 hours'));
    if($_SESSION['class'] == 3)
        $horasaida = date('Y-m-d H:i:s', strtotime('+1 hours'));
    if($_SESSION['class'] == 4)
        $horasaida = date('Y-m-d H:i:s', strtotime('+10 minutes'));
    if($_SESSION['class'] == 5)
        $horasaida = date('Y-m-d H:i:s', strtotime('0 hour'));


    $horaentrada = date('Y-m-d H:i:s', strtotime('0 hour'));

    $emespera = 1;

    include_once "connection.php";

    $link = GetMyConnection();

    $sql = "INSERT 
            INTO Triagem (UserId, difresp, probcard, fracturas, tonturas, hemorragia, azia, vomitos, cefaleia, temp, 
            tensao, glicemia, triagem, horaentrada, horasaida, emespera) 
            VALUES ('".$_SESSION['identity']."','".$_SESSION['difresp']."','".$_SESSION['probcard']."',
            '".$_SESSION['fracturas']."','".$_SESSION['tonturas']."','".$_SESSION['hemorragia']."','".$_SESSION['azia']."',
            '".$_SESSION['vomitos']."','".$_SESSION['cefaleia']."','".$_SESSION['temp']."','".$_SESSION['tensao']."',
            '".$_SESSION['glicemia']."','".$_SESSION['class']."','".$horaentrada."','".$horasaida."',
            '".$emespera."')";

    $result = mysqli_query($link,$sql);

    if($result==0){
        echo '<tr><td>&nbsp;</td></tr>';
        echo '<tr><td>Erro ao adicionar triagem!</td></tr>';
        echo "An error has occurred: " . mysqli_error($link);
    } else {
        echo '<tr><td>&nbsp;</td></tr>';
        echo '<tr><td>Triagem inserida com sucesso!</td></tr>';
    }

mysqli_close($link);


//triagem id
//user id
// $difresp,
// $probcard,
// $fracturas,
// $tonturas,
//$hemorragia,
//  $azia,
// $vomitos,
// $cefaleia//
// //$temp
//$tensao,
//$glicemia,
//$triagem class
//horaentrada
//horasaida
//emespera
?>