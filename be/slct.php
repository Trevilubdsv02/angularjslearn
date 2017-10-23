<?php
require_once('conexao.php');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept, Origin');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Content-Type: application/json');


$sql = "SELECT * FROM tb_angular";
$result = mysqli_query($con,$sql);
$array = [];

while($row = mysqli_fetch_assoc($result))
{
    $array[] = $row;
};


//var_dump($array);
//echo '<br />';
//echo '<br />';
//$json = '[{"nome":"João", "telefone":"11112222", "dia": "new Date()", "cor":"black"},{"nome":"João", "telefone":"33334444", "dia": "new Date()", "cor":"green"}]';
//var_dump(json_decode($json, true));
//echo '<br />';
//echo '<br />';
$jeison = json_encode($array, true);
print_r($jeison);



?>