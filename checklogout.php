<form method="post">
    <div align="center">
        <p><br>Tem a certeza?</p>
        <button type="submit" name="submityes" class="btn btn-lg btn-danger">Sim</button>

        <button type="submit" name="submitno" class="btn btn-lg btn-default">Não</button>
    </div>
    <?php
    if (isset($_POST['submityes'])) {
        include 'logout.php';
    }
    if (isset($_POST['submitno'])) {
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
    }
    ?>

</form>