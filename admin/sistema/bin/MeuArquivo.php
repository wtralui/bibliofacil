<?php
include("conexao.php");

class ArrayValue implements JsonSerializable {
    public function __construct(array $array) {
        $this->array = $array;
    }

    public function jsonSerialize() {
        return $this->array;
    }
}




$sql = "SELECT * FROM emprestimos";

$con = $conn->query($consulta) or die(mysql_error());

        $result = mysqli_query($conn, $sql);
        $rows = array();
        while($each = mysqli_fetch_assoc($result)){
            $rows[] = $each;
            
        }
        header('Content-type: application/json');
        $newArray = array(
            'draw'=> 1,
            'recordsTotal'=> 5000,
            'recordsFiltered'=> 5000,
            'data'=>$rows
        );
        
        $fixle = json_encode($newArray, JSON_PRETTY_PRINT);
        echo $fixle;
		
?>


