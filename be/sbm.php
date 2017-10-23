<?php 
require_once('conexao.php');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept, Origin');
header('Access-Control-Allow-Methods: POST, GET, PUT, OPTIONS');
header('Content-Type: application/json');

$select_columns= "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'cad_simples' AND TABLE_NAME = 'tb_angular'";
//var_dump($_POST);
$data = $_POST;
$data = json_decode(key($data), true );    
//var_dump($data);
function write_column($result, $pular, $con, $select_columns) //escrever os campos selecionados da tabela
{
$nome_coluna = null;
$result = mysqli_query($con, $select_columns); //resultado da busca ->$sql_select
$x = count($pular)  ;   //calcular o numero de linhas restantes ↓↓↓↓
$y = mysqli_num_rows($result); //conta as linhas da  busca->$result
$i_end = $y - $x;       //←←
$i = 1; //contador para o loop

        if (mysqli_num_rows($result) > 0)  //se contar linhas $result maior que 0
        {
            foreach($result as $linha => $valor) 
            {
                if(in_array($linha, $pular)){continue;} //pular os numeros -> $pular
                if($i === $i_end)
                {
                    $nome_coluna .= $valor['COLUMN_NAME'];
                }
                else
                {
                    $nome_coluna .= $valor['COLUMN_NAME'].", " ;
                }
                    $i=$i + 1;
            }
        }
return $nome_coluna;    
}
$telefone = $data['telefone'];
$cor = $data['cor'];
$nome = $data['nome'];
$nome = str_replace("_"," ",$nome);
$operadora = $data['operadora'];
$pular = array('0','5');
$colunas=write_column($result,$pular,$con,$select_columns);
//echo $colunas;
$sql ="INSERT INTO tb_angular ($colunas) VALUES ('$telefone','$cor','$nome','$operadora') ";
mysqli_query($con,$sql);
$last_id = $con->insert_id; //pegar o ultimo id do insert


?>