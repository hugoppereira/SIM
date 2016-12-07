<form method="post">

		<button  type="button" name="medico" class="btn btn-lg btn-primary">Medico</button>
        <button type="button" name="enfermeiro" class="btn btn-lg btn-success">Enfermeiro</button>
		<button type="button" name="paciente" class="btn btn-lg btn-warning">Paciente</button>

	<?php if(isset($_POST['medico']) || isset($_POST['enfermeiro'])){ ?>

            <div class="row">
		        <div class="col-md-6">
		            <div class="form-group row">
		                <label for="example-text-input" class="col-xs-2 col-form-label">Nome</label>
		                <div class="col-xs-10">
		                    <input class="form-control" type="text" name="nome" id="nome">
		                </div>
		            </div>
		            <div class="form-group row">
		                <label for="example-search-input" class="col-xs-2 col-form-label">Morada</label>
		                <div class="col-xs-10">
		                    <input class="form-control" type="text" name="morada" id="morada">
		                </div>
		            </div>
		            <div class="form-group row">
		                <label for="example-tel-input" class="col-xs-2 col-form-label">Telephone</label>
		                <div class="col-xs-10">
		                    <input class="form-control" type="tel" name="telefone" id="telefone">
		                </div>
		            </div>
		            <div class="form-group row">
		                <label for="example-text-input" class="col-xs-2 col-form-label">Username</label>
		                <div class="col-xs-10">
		                    <input class="form-control" type="text" name="username" id="usernome">
		                </div>
		            </div>
		
		            <div class="form-group row">
		                <label for="example-password-input" class="col-xs-2 col-form-label">Password</label>
		                <div class="col-xs-10">
		                    <input class="form-control" type="password" name="pass" id="example-password-input">
		                </div>
		            </div>
		        </div>
		    </div>
    <?php }
		
		if(isset($_POST['paciente'])){
				echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
		}

    ?>

</form>
