
<?php $_SESSION['identity']=$_GET['id']; //value=<?php echo $identity; ?>

    <form method="post" action="index.php?operacao=atribuicor">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="example-text-input" class="col-xs-1 col-form-label">ID:</label>
                    <div class="col-xs-5">
                        <p><?php echo $_SESSION['identity']; ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-xs-2 col-form-label">Temperatura</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="text" name="temp" id="temp" value="37">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="example-text-input" class="col-xs-2 col-form-label">Glic&eacute;mia</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="text" name="glicemia" id="glicemia" value="100">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-xs-2 col-form-label">Dificuldades Respirat&oacute;rias</label>
                    <div class="col-xs-1">
                        <input class="form-control" type="checkbox" name="difresp" id="difresp" value="1">
                    </div>
                    <label for="example-text-input" class="col-xs-2 col-form-label">Problemas Card&iacute;acos</label>
                    <div class="col-xs-1">
                        <input class="form-control" type="checkbox" name="probcard" id="probcard" value="1">
                    </div>
                    <label for="example-text-input" class="col-xs-2 col-form-label">Fracturas</label>
                    <div class="col-xs-1">
                        <input class="form-control" type="checkbox" name="fracturas" id="fracturas" value="1">
                    </div>
                    <label for="example-text-input" class="col-xs-2 col-form-label">Tonturas</label>
                    <div class="col-xs-1">
                        <input class="form-control" type="checkbox" name="tonturas" id="tonturas" value="1">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="example-text-input" class="col-xs-2 col-form-label">Tensao</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="text" name="tensao" id="tensao" value="13">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-xs-2 col-form-label">Hemorragia</label>
                    <div class="col-xs-1">
                        <input class="form-control" type="checkbox" name="hemorragia" id="hemorragia" value="1">
                    </div>
                    <label for="example-text-input" class="col-xs-2 col-form-label">Azia</label>
                    <div class="col-xs-1">
                        <input class="form-control" type="checkbox" name="azia" id="azia" value="1">
                    </div>
                    <label for="example-text-input" class="col-xs-2 col-form-label">V&oacute;mitos</label>
                    <div class="col-xs-1">
                        <input class="form-control" type="checkbox" name="vomitos" id="vomitos" value="1">
                    </div>
                    <label for="example-text-input" class="col-xs-2 col-form-label">Cefaleia</label>
                    <div class="col-xs-1">
                        <input class="form-control" type="checkbox" name="cefaleia" id="cefaleia" value="1">
                    </div>
                </div>
            </div>
        </div>


        <button  type="submit" id="validar" name="validar" class="btn btn-lg btn-primary">Validar</button>


    </form>


