<?php $identity=$_GET['id']; //value=<?php echo $identity;

include_once "connection.php";

$link = GetMyConnection();

$sql = "SELECT * FROM Users where UserID = $identity";
$result = $link->query($sql);
$result = mysqli_fetch_array($result);

?>

<form method="post", action="index.php?operacao=editarpessoa_sql&id=<?php echo $identity; ?>">
    <div align="center"><h3>Editar Utilizador</h3></div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="example-text-input" class="col-xs-2 col-form-label">ID</label>
                <div class="col-xs-10">
                    <input readonly class="form-control" type="text" name="identity" id="identity" value="<?php echo $result['UserId']; ?>" >
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-xs-2 col-form-label">Nome</label>
                <div class="col-xs-10">
                    <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $result['Nome']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-xs-2 col-form-label">Morada</label>
                <div class="col-xs-10">
                    <input class="form-control" type="text" name="morada" id="morada" value="<?php echo $result['Morada']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-xs-2 col-form-label">Contacto</label>
                <div class="col-xs-10">
                    <input class="form-control" type="text" name="telefone" id="telefone" value="<?php echo $result['Contacto']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-xs-4 col-form-label">Sexo</label>
                <div class="col-xs-6">
                    <select class="selectpicker" name="sexo">
                        <option value="masculino" >Masculino</option>
                        <option value="feminino">Femenino</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-xs-4 col-form-label">Data de Nascimento</label>
                <div class="col-xs-6">
                    <input class="form-control" type="text" name="datanasc" id="datanasc" value="<?php echo $result['DataNascimento']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-xs-2 col-form-label">NIF</label>
                <div class="col-xs-10">
                    <input class="form-control" type="text" name="nif" id="nif" value="<?php echo $result['NIF']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-xs-2 col-form-label">Username</label>
                <div class="col-xs-10">
                    <input class="form-control" type="text" name="username" id="username" value="<?php echo $result['Username']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-password-input" class="col-xs-2 col-form-label">Password</label>
                <div class="col-xs-10">
                    <input class="form-control" type="password" name="pass" id="pass" value="<?php echo $result['Password']; ?>">
                </div>
            </div>
            <?php if($_SESSION['authuser'] != 1){
            echo "<div class='form-group row'>";
               echo "<label for='example-text-input' class='col-xs-2 col-form-label'>Perfil</label>";?>
                <div class="col-xs-10">
                    <select class="selectpicker" name="perfil">
                        <option value="paciente" >Paciente</option>
                        <option value="enfermeiro">Enfermeiro</option>
                        <option value="medico">Médico</option>
                    </select>
                </div>
            <?php }?>
            </div>
        </div>
<div>
    <button  type="submit" name="guardar" class="btn btn-lg btn-primary">Inserir</button>
</div>
</form>
