<?php
// abre conexao com o banco 
    require_once 'conectarBanco.php';

print_r($_GET); 
echo "<br><br>";
$id= $_GET["id"]; 
echo "id aaaaaaaa = " .$id; 
//monta sql para o banco de dados ,
$sql = "delete from usuarios where id = ".$id;
echo $sql;
echo "<br><br>";

$mysqli -> query($sql);
// echo "New record has id: " . $mysqli -> insert_id;
$mysqli -> close();


header('Location: principal.php');

?>