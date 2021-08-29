<?php
include('conexao.php');


$con = $conn->query($consulta) or die(mysql_error());
$cont = "SELECT * FROM `livros`";


if(1>0){
  $sql="SELECT COUNT(id) AS id FROM livros";
  if($sql){
  $count = $conn->query( $sql )->fetch_object()->id;

  }
$conta = $count +1;

echo $conta;


}
mysqli_close($conn);

?>
