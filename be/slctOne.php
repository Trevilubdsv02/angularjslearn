<?php 
require_once('conexao.php');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept, Origin');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Content-Type: application/json');

echo phpversion();

$data = $_POST;
$data = json_decode(key($data), true );
var_dump($_POST);
var_dump($data);
$id = $data['id'];
$data=array();

$sql = "SELECT * FROM tb_angular where id = $id";
$result = mysqli_query($con,$sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result))
            {
                $data['consulta'] = $row;
            };
        };
        echo json_encode($data);
?>