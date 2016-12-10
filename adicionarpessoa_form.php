<?php
if (isset($_POST['medico'])) {
    $_SESSION['perfil'] = 'medico';
}else {
    if (isset($_POST['paciente'])) {
        $_SESSION['perfil'] = 'paciente';
    } else {
        if (isset($_POST['enfermeiro'])) {
            $_SESSION['perfil'] = 'enfermeiro';
                }
    }
}
?>


<form method="post", action="index.php?operacao=adicionarpessoa_sql">

    <?php echo $_SESSION['perfil'] ?>
<div class="row">
    <div class="col-md-6">
        <div class="form-group row">
            <label for="example-text-input" class="col-xs-2 col-form-label">Nome</label>
            <div class="col-xs-10">
                <input class="form-control" type="text" name="nome" id="nome">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-xs-2 col-form-label">Morada</label>
            <div class="col-xs-10">
                <input class="form-control" type="text" name="morada" id="morada">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-xs-2 col-form-label">Contacto</label>
            <div class="col-xs-10">
                <input class="form-control" type="text" name="telefone" id="telefone">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-xs-2 col-form-label">Sexo</label>
            <div class="col-xs-10">
            <select class="selectpicker", name="sexo">
                <option value="masculino" >Masculino</option>
                <option value="feminino">Femenino</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-xs-2 col-form-label">Data de Nascimento</label>
            <div class="col-xs-10">
                <input class="form-control" type="text" name="datanasc" id="datanasc">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-xs-2 col-form-label">NIF</label>
            <div class="col-xs-10">
                <input class="form-control" type="text" name="nif" id="nif">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-xs-2 col-form-label">Username</label>
            <div class="col-xs-10">
                <input class="form-control" type="text" name="username" id="username">
            </div>
        </div>

        <div class="form-group row">
            <label for="example-password-input" class="col-xs-2 col-form-label">Password</label>
            <div class="col-xs-10">
                <input class="form-control" type="password" name="pass" id="pass">
            </div>
        </div>
    </div>
</div>

<button  type="submit" name="guardar" class="btn btn-lg btn-primary">Inserir</button>
</form>