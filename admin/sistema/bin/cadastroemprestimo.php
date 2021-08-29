<?php
include('conexao.php');

if(isset($_POST['selectuser'])){   // Usuário selecionado no SELECT de cadastro de empréstimo
    $user = $_POST['selectuser'];
}
if(isset($_POST['selectb'])){  // LIVRO selecionado no SELECT de cadastro de empréstimo
    $book = $_POST['selectb'];
    $data_emprestimo = $_POST['data_emprestimo'];
    $data_devolucao = $_POST['data_devolucao'];
    $condicao_atual = $_POST['condicao_atual'];
    $condicao_recolhimento = $_POST['condicao_recolhimento'];
}

$date = date("Y-m-d"); 
echo($date);
$row = "SELECT COUNT(nome) FROM usuario";
$con = $conn->query($consulta) or die("Erro ao realizar consulta.");
    while($row = $con->fetch_array()){
        $nome[] = $row['nome'];
    }
$contador = count($nome);
$identify = $contador+1;

$row2 = "SELECT autor FROM livros WHERE nome_livro = '$book' ";

$con3 = $conn->query($row2) or die(mysql_error());

if($row2 = $con3->fetch_array()){
    $autor= $row2['autor'];
}

$query = "INSERT INTO emprestimos(`nome_apenada`, `nome_livro`, `autor`, `data_emprestimo`, `data_devolucao`, `condicao_emprestimo`, `condicao_devolucao`,`status`) VALUES ('$user','$book','$autor','$data_emprestimo','$data_devolucao','$condicao_atual','$condicao_recolhimento','Emprestado')";
if($query && $user != null){
  if($cadastra= mysqli_query($conn, $query)){
  }
}
mysqli_close($conn);
?>
