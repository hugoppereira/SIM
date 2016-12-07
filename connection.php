<?php
/**
 * Created by PhpStorm.
 * User: joseclimaco
 * Date: 07/12/2016
 * Time: 16:11
 */

include_once "configuration.php";

function GetMyConnection()
{
    global $g_link;
    if( $g_link )
        return $g_link;
    $g_link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die('Nao foi possivel ligar: ' . mysqli_error());
    mysqli_select_db(GetMyConnection(),DB_DATABASE) or die('Nao foi possi�vel seleccionar a base de dados');
    return $g_link;
}
