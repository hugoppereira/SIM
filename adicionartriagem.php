
<?php $identity=$_GET['id']; ?>

<table cellspacing="2" align="center">
    <form method="post" >
<!--          action="index.php?operacao=atribuircor">-->

        <tr>
            <td align="right">
                ID: <label type="text" name="id" value=<?php echo $identity; ?> style="width: 70px">
                &nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td align="right">
                Glic&eacute;mia: <input type="text" name="glicemia" style="width: 70px">
                &nbsp;&nbsp;&nbsp;&nbsp;
            </td>
        </tr>

        <tr>
            <td align="right">
                Temperatura: <input type="text" name="temperatura" style="width: 70px">
                &nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td align="right">
                Tens&atilde;o <input type="text" name="tensao" style="width: 70px">
                &nbsp;&nbsp;&nbsp;&nbsp;
            </td>
        </tr>

        <tr>
            <td align="left" style="height: 18px">
                <input type="checkbox" name="prob_resp" value="1">Dificuldades Respirat&oacute;rias
            </td>
            <td align="left" width="50%" style="height: 18px">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="prob_card" value="1">Problemas Card&iacute;acos
            </td>
        </tr>

        <tr>
            <td align="left">
                <input type="checkbox" name="fract" value="1">Fracturas
            </td>
            <td align="left">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="tont" value="1">Tonturas
            </td>
        </tr>

        <tr>
            <td align="left">
                <input type="checkbox" name="tosse" value="1">Tosse
            </td>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="azia" value="1">Azia

            </td>
        </tr>

        <tr>
            <td align="left">
                <input type="checkbox" name="vomitos" value="1">V&oacute;mitos
            </td>
            <td align="left">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="cefaleia" value="1">Cefaleia
            </td>
        </tr>

        <tr>
            <td align="center" colspan="2">
                &nbsp;
            </td>
        </tr>

        <tr>
            <td align="center" colspan="2">
                <input type="submit" name="Submit" value="Atribuir C&ocirc;r" style="width: 135px; height: 35px;">


            </td>
        </tr>

    </form>
</table>
