<?php
// abre conexao com o banco 
    require_once 'conectarBanco.php';

print_r($_POST); 
echo "<br><br>";
$nome = $_POST["nome"]; 
$email = $_POST["email"]; 
$senha = $_POST["senha"]; 

//monta sql para o banco de dados ,
$sql = "INSERT  INTO usuarios (nome, email,senha) VALUES ('".$nome."','".$email."','".$senha."')";
echo $sql;
echo "<br><br>";

$mysqli -> query($sql);
// echo "New record has id: " . $mysqli -> insert_id;
$mysqli -> close();


	header('Location: principal.php');

?>
