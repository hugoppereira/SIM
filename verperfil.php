<?php

include_once "connection.php";
$identity = $_GET['id'];

$link = GetMyConnection();

$sql = "SELECT * FROM Users where UserID = $identity";
$result = $link->query($sql);
$result = mysqli_fetch_array($result);
?>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2><?php echo $result['Nome']; ?></h2>
                    <p><strong>Morada: </strong> <?php echo $result['Morada']; ?> </p>
                    <p><strong>Contacto: </strong> <?php echo $result['Contacto']; ?></p>
                    <p><strong>Sexo: </strong> <?php echo $result['Sexo']; ?></p>
                    <p><strong>DataNascimento: </strong> <?php echo $result['DataNascimento']; ?></p>
<!--                    <p><strong>outros: </strong>-->
<!--                        <span class="tags">cenas</span>-->
<!--                        <span class="tags">cenas</span>-->
<!--                        <span class="tags">cenas</span>-->
<!--                        <span class="tags">cenas</span>-->
<!--                    </p>-->
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <p><strong>Id: </strong><?php echo $result['UserId']; ?></p>
                    <p><strong>Username: </strong> <?php echo $result['Username']; ?></p>

                    <div class="btn-group dropup btn-block">
                        <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Opções</button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu text-left" role="menu">
                        <?php    echo "<li><a href='index.php?operacao=editarpessoa&id=".$identity."'><span class='fa fa-envelope pull-right'></span> Editar Utilizador </a></li>";

                            if ($_SESSION['authuser'] == 2) {
                                echo "<li><a href='index.php?operacao=adicionartriagem&id=".$identity."'><span class='fa fa-list pull-right'></span> Nova Triagem </a></li>";
                            } ?>
<!--                            <li class="divider"></li>-->
<!--                            <li><a href="#"><span class="fa fa-warning pull-right"></span>Cenas</a></li>-->
<!--                            <li class="divider"></li>-->
<!--                            <li><a href="#" class="btn disabled" role="button"> Cenas </a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 divider">
                <div class="col-xs-12 col-sm-12 emphasis">
                    <h2><strong>Entradas</strong></h2>
                    <ul>
                        <?php

                        $sql = "SELECT triagemid, difresp, probcard, fracturas, tonturas, hemorragia, azia, vomitos, cefaleia, temp, 
                                       tensao, glicemia, triagem, horaentrada, horasaida FROM Triagem WHERE UserID = $identity";
                        $result = $link->query($sql);
                        ?>
                        <table id="listprofiles" class="table table-striped table-bordered" cellspacing="0"
                               style="width: 100%">
                            <thead>
                            <tr style="font-size: xx-small">
                                <th>Triagem ID</th>
                                <th>Dificuldades Respiratorias</th>
                                <th>Problemas Cardiacos</th>
                                <th>Fracturas</th>
                                <th>Tonturas</th>
                                <th>Hemorragia</th>
                                <th>Azia</th>
                                <th>Vomitos</th>
                                <th>Cefaleia</th>
                                <th>Temperatura</th>
                                <th>Tensão</th>
                                <th>Glicemia</th>
                                <th>Triagem</th>
                                <th>Hora Entrada</th>
                                <th>Hora Saida</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                    <td>" . $row["triagemid"] . "</td>
                                    <td>" . $row["difresp"] . "</td>
                                    <td> " . $row["probcard"] . "</td>
                                    <td> " . $row["fracturas"] . "</td>
                                    <td> " . $row["tonturas"] . "</td>
                                    <td> " . $row["hemorragia"] . "</td>
                                    <td> " . $row["azia"] . "</td>
                                    <td> " . $row["vomitos"] . "</td>
                                    <td> " . $row["cefaleia"] . "</td>
                                    <td> " . $row["temp"] . "</td>
                                    <td> " . $row["tensao"] . "</td>
                                    <td> " . $row["glicemia"] . "</td>" ?>

                                    <?php if ($row["triagem"] == 1) { ?>
                                        <td bgcolor="blue"></td>
                                        <?php
                                    } else {
                                        if ($row["triagem"] == 2) { ?>
                                            <td bgcolor="green"></td>
                                            <?php
                                        } else {
                                            if ($row["triagem"] == 3) { ?>
                                                <td bgcolor="yellow"></td>
                                                <?php
                                            } else {
                                                if ($row["triagem"] == 4) { ?>
                                                    <td bgcolor="orange"></td>
                                                    <?php
                                                } else {
                                                    if ($row["triagem"] == 5) { ?>
                                                        <td bgcolor="red"></td>
                                                        <?php
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    echo "<td> " . $row["horaentrada"] . "</td>
                                     <td> " . $row["horasaida"] . "</td>
                                    </tr>";
                                }
                            } else {
                                echo "0 results";
                            }
                            $link->close();
                            ?>
                            </tbody>
                        </table>
                    </ul>
                </div>
            </div>
            <div class='clearfix'></div>
        </div>
    </div>
</div>