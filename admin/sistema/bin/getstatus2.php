<?php
include('conexao.php');


$con = $conn->query($consulta) or die(mysql_error());
$cont = "SELECT * FROM `emprestimos`";


if(1>0){
  $sql="SELECT COUNT(id) AS id FROM emprestimos WHERE status='Devolvido'";
  if($sql){
  $count = $conn->query( $sql )->fetch_object()->id;

  }
$conta = $count;

echo $conta;


}
mysqli_close($conn);

?>
