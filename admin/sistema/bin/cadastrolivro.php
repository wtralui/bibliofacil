<?php
include('conexao.php');

if(isset($_POST['idbook'])){  // LIVRO selecionado no SELECT de cadastro de empréstimo
    $idbook = $_POST['idbook'];
}
if(isset($_POST['namebook'])){  // LIVRO selecionado no SELECT de cadastro de empréstimo
    $namebook = $_POST['namebook'];
    $autor = $_POST['nameautor'];
}
$con = $conn->query($consulta) or die(mysql_error());
$cont = "SELECT * FROM `livros`";


if($namebook != NULL){
  $sql="SELECT COUNT(id) AS id FROM livros";
  if($sql){
  $count = $conn->query( $sql )->fetch_object()->id;

  }
$conta = $count +1;

$query = "INSERT INTO livros(id, nome_livro, autor) VALUES ('$conta','$namebook','$autor')";

if($query){
  if($cadastra= mysqli_query($conn, $query)){

  }
}



}
mysqli_close($conn);

?>
