<?php
include('conexao.php');

if(isset($_POST['id_apenado'])){  // LIVRO selecionado no SELECT de cadastro de empréstimo
    $id_apenado = $_POST['id_apenado'];
}
if(isset($_POST['nome_apenado'])){  // LIVRO selecionado no SELECT de cadastro de empréstimo
    $nome_apenado = $_POST['nome_apenado'];
}
$con = $conn->query($consulta) or die(mysql_error());
$cont = "SELECT * FROM `users`";


if($nome_apenado != NULL){
  $sql="SELECT COUNT(id) AS id FROM users";
  if($sql){
  $count = $conn->query( $sql )->fetch_object()->id;

  }
$conta = $count +1;

$query = "INSERT INTO users(id, nome) VALUES ('$conta','$nome_apenado')";

if($query){
  if($cadastra= mysqli_query($conn, $query)){

  }
}



}
mysqli_close($conn);

?>
