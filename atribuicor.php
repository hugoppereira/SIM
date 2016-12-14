<?php

    include_once "calculacor.php";

    if (!isset($_POST['glicemia']))
        $_POST['glicemia'] = 0;
    if (!isset($_POST['difresp']))
        $_POST['difresp'] = 0;
    if (!isset($_POST['probcard']))
        $_POST['probcard'] = 0;
    if (!isset($_POST['fracturas']))
        $_POST['fracturas'] = 0;
    if (!isset($_POST['tonturas']))
        $_POST['tonturas'] = 0;
    if (!isset($_POST['tensao']))
        $_POST['tensao'] = 0;
    if (!isset($_POST['hemorragia']))
        $_POST['hemorragia'] = 0;
    if (!isset($_POST['azia']))
        $_POST['azia'] = 0;
    if (!isset($_POST['vomitos']))
        $_POST['vomitos'] = 0;
    if (!isset($_POST['cefaleia']))
        $_POST['cefaleia'] = 0;

    $class = GetColor($_POST['glicemia'], $_POST['difresp'], $_POST['probcard'], $_POST['fracturas'], $_POST['tonturas'],
        $_POST['tensao'], $_POST['hemorragia'], $_POST['azia'], $_POST['vomitos'], $_POST['cefaleia']);

    $_SESSION['glicemia'] = $_POST["glicemia"];            //
    $_SESSION['difresp'] = $_POST["difresp"];                //
    $_SESSION['probcard'] = $_POST["probcard"];            //
    $_SESSION['fracturas'] = $_POST["fracturas"];            //
    $_SESSION['tonturas'] = $_POST["tonturas"];                    //
    $_SESSION['tensao'] = $_POST["tensao"];                    //
    $_SESSION['hemorragia'] = $_POST["hemorragia"];                    //
    $_SESSION['azia'] = $_POST["azia"];                    //
    $_SESSION['vomitos'] = $_POST["vomitos"];                //
    $_SESSION['cefaleia'] = $_POST["cefaleia"];
    $_SESSION['temp'] = $_POST["temp"]; //
?>

<div align="center">
    <?php
        if ($class == 1)
            echo '<input type="text"  style="background-color:blue; width: 100px; height: 50px; text-align:center" value="AZUL">';
        if ($class == 2)
            echo '<input type="text" style="background-color:green; width: 100px; height: 50px; text-align:center" value="VERDE">';
        if ($class == 3)
            echo '<input type="text" style="background-color:yellow; width: 100px; height: 50px; text-align:center" value="AMARELO">';
        if ($class == 4)
            echo '<input type="text"  style="background-color:orange; width: 100px; height: 50px; text-align:center" value="LARANJA">';
        if ($class == 5)
            echo '<input type="text"  style="background-color:red; width: 100px; height: 50px; text-align:center" value="VERMELHO">';
    ?>
</div>

<?php $_SESSION['class'] = $class; ?>

<form method="post" action="index.php?operacao=adicionartriagem_sql">
    <div align="center">
        <br>Pretende alterar a cor?<br>
        <select class="selectpicker" name="class">
            <option style="text-align:center" value="0">Não</option>
            <option style="background-color:blue; text-align:center" value="1">AZUL</option>
            <option style="background-color:green; text-align:center" value="2">VERDE</option>
            <option style="background-color:yellow; text-align:center" value="3">AMARELO</option>
            <option style="background-color:orange; text-align:center" value="4">LARANJA</option>
            <option style="background-color:red; text-align:center" value="5">VERMELHO</option>
        </select>
        <br><br><input class="btn btn-lg btn-primary" type="submit" name="Submit" value="Adicionar">
    </div>

</form>


