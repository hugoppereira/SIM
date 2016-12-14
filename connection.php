<?php

require ("configuration.php");

function GetMyConnection()
{
    global $g_link;
    if( $g_link )
        return $g_link;
    $g_link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE) or die('Nao foi possivel ligar: ' . mysqli_error($g_link));
    mysqli_select_db($g_link, DB_DATABASE) or die('Nao foi possivel seleccionar a base de dados');
    return $g_link;
}
