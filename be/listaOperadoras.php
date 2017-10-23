<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept, Origin');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Content-Type: application/json');

$array = array
    (
         array("nome" => "Oi", "codigo" =>"1"),
         array("nome" => "Vivo", "codigo" =>"2"),
         array("nome" => "Claro", "codigo" =>"3"),
         array("nome" => "Tim", "codigo" =>"4")
    );
$jeison = json_encode($array, true);
print_r($jeison);



?>