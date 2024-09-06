<?php
// Created and tested by: Russo - Valdeijr
$host = "localhost"; 
$user = "site";
$passwd = "b-_m-fK*Nq(z.SzF"; 
$banco = "housefy"; 
$link = mysqli_connect($host, $user, $passwd);
if (!$link) {
    die('Não conectado : ' . mysql_error());
}
return $link;
$mysqli = mysqli_select_db($link, $banco);
?>