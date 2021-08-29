<?php
include("conexao.php");

$row = "SELECT nome_livro FROM livros";

$con = $conn->query($consulta3) or die(mysql_error());

while($row = $con->fetch_array()){

    $nome[] = $row['nome_livro'];
    print ("<option value=\"$row[nome_livro]\">$row[nome_livro]</option>");
}

?>
