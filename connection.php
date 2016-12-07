<?php
/**
 * Created by PhpStorm.
 * User: joseclimaco
 * Date: 07/12/2016
 * Time: 16:11
 */

function GetMyConnection()
{
    global $g_link;
    if( $g_link )
        return $g_link;
    $g_link = mysqli_connect('localhost', 'root', 'root') or die('Nao foi possivel ligar: ' . mysqli_error());
    return $g_link;
}
