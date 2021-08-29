<?php
include('conexao.php');

if(isset($_POST['cpslct'])){
    $sts = $_POST['cpslct'];
}
if(isset($_POST['update_id'])){
    $id2 = $_POST['update_id'];
    $cond_devolu = $_POST['cond_devolu'];
}
if(isset($_POST['data_devolu'])){
    $data_devolu = $_POST['data_devolu'];
}

$alstatus = "UPDATE emprestimos SET status='$sts', condicao_devolucao = '$cond_devolu', data_devolucao = '$data_devolu' WHERE id= '$id2'";
echo $alstatus;





if($sts == "Emprestado"){
$query_run = mysqli_query($conn, $alstatus);
if($query_run)
{

    $sql = "SELECT * FROM emprestimos";

    if ($result = mysqli_query($conn, $sql)) {
        // Return the number of rows in result set
        $rowcount = mysqli_num_rows($result);

        mysqli_free_result($result);

    }

    mysqli_close($conn);


    while($dado = $con->fetch_array()){
        echo $dado['id'];
        echo $dado['nome'];
        echo $dado['livro'];
        echo $dado['status'];
    }
    } else {
    echo '<script> alert("O status não foi atualizado. Favor, contatar o Administrador.") </script>';
}
// =>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> MODAL = DEVOLVIDO
} else {
$alstatus2 = "UPDATE emprestimos SET status='Devolvido', condicao_devolucao = '$cond_devolu' WHERE id= '$id2'";
$query_run2 = mysqli_query($conn, $alstatus2);
    if($query_run2)
    {
    }
    else
    {
    }
}




?>
