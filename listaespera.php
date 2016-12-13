<?php

include_once "connection.php";

$link = GetMyConnection();

$sql = "SELECT  Users.UserID, Users.Nome, Triagem.triagemid, Triagem.triagem, Triagem.horaentrada, Triagem.horasaida 
        FROM Users, Triagem 
        WHERE Users.UserID = Triagem.UserID and Triagem.emespera = 1";

$result = $link->query($sql);
?>

<div class="col-xs-12 divider">
    <div class="col-xs-12 col-sm-12 emphasis">

        <?php if (isset($_SESSION['authuser']) && $_SESSION['authuser'] == 3) {
            echo ' <div align="center">
                    <form method="post" action="index.php?operacao=retirapaciente_sql">
                    <button  type="submit" id="medico" name="proxpaciente" class="btn btn-lg btn-primary">Atender proximo paciente</button>
                    </form>
                  </div>';
        }
        ?>

        <h2><strong>Lista de Espera</strong></h2>


        <table id="listprofiles" class="table table-striped table-bordered" cellspacing="0" style="width: 100%">
            <thead>
            <tr>
                <th>Triagem ID</th>
                <th>User ID</th>
                <th>Nome</th>
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
                                <td>" . $row["UserID"] . "</td>
                                <td>" . $row["Nome"] . "</td>" ?>

                    <?php if ($row["triagem"] == 1) { ?>
                        <td bgcolor="blue" style="color: blue"><?= $row["triagem"]; ?></td>
                        <?php
                    } else {
                        if ($row["triagem"] == 2) { ?>
                            <td bgcolor="green" style="color: green"><?= $row["triagem"]; ?></td>
                            <?php
                        } else {
                            if ($row["triagem"] == 3) { ?>
                                <td bgcolor="yellow" style="color: yellow"><?= $row["triagem"]; ?></td>
                                <?php
                            } else {
                                if ($row["triagem"] == 4) { ?>
                                    <td bgcolor="orange" style="color: orange"><?= $row["triagem"]; ?></td>
                                    <?php
                                } else {
                                    if ($row["triagem"] == 5) { ?>
                                        <td bgcolor="red" style="color: red"><?= $row["triagem"]; ?></td>
                                        <?php
                                    }
                                }
                            }
                        }
                    }
                    echo "<td>" . $row["horaentrada"] . "</td>
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

    </div>
</div>
<div class='clearfix'></div>