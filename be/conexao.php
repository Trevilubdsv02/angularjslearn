<?php 
ini_set('default_charset','UTF-8');
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$con = new mysqli('localhost', 'root', '', 'cad_simples' );
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>