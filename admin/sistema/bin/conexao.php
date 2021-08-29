<?php
$servername = "localhost";
$database = "biblio";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




$consulta = "SELECT * FROM users";
$con = $conn->query($consulta) or die(mysql_error());

$consulta3 = "SELECT nome_livro FROM livros";
$con3 = $conn->query($consulta3) or die(mysql_error());

?>
