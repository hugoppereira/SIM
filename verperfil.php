<?php

include_once "connection.php";
$identity=$_GET['id'];

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
                    <p><strong>outros: </strong>
                        <span class="tags">cenas</span>
                        <span class="tags">cenas</span>
                        <span class="tags">cenas</span>
                        <span class="tags">cenas</span>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <p><strong>Id: </strong><?php echo $result['UserId']; ?></p>
                    <p><strong>Username: </strong> <?php echo $result['Username']; ?></p>
                    <div class="btn-group dropup btn-block">
                        <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Opções </button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu text-left" role="menu">
                            <li><a href="#"><span class="fa fa-envelope pull-right"></span> Alterar Utilizador </a></li>
                            <li><a href="#"><span class="fa fa-list pull-right"></span> Nova Triagem  </a></li>
                            <li class="divider"></li>
                            <li><a href="#"><span class="fa fa-warning pull-right"></span>Cenas</a></li>
                            <li class="divider"></li>
                            <li><a href="#" class="btn disabled" role="button"> Cenas </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 divider">
                <div class="col-xs-12 col-sm-12 emphasis">
                    <h2><strong>Entradas</strong></h2>
                    <ul>
                        <li>Entrada 1</li>
                        <li>Entrada 2</li>
                    </ul>
                </div>
            </div>
            <div class='clearfix'></div>
        </div>
    </div>
</div>