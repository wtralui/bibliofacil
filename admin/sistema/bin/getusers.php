<?php
include("conexao.php");

$row = "SELECT nome FROM users";

$con = $conn->query($consulta) or die(mysql_error());

while($row = $con->fetch_array()){

    $nome[] = $row['nome'];
    print ("<option value=\"$row[nome]\">$row[nome]</option>");
}

?>
