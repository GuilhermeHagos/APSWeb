
<?php
// abre conexao com o banco 
    require_once 'conectarBanco.php';
    
session_start();
if (!isset($_SESSION['UsuarioId'])) {
	header("location: index.php");
	exit;
}

    
//print_r($_POST); 
//echo "<br><br>";
//echo "Bem vindo".$_SESSION['UsuarioId'];

$NumeroAdultos = $_POST["NumeroAdultos"]; 
$NumeroCriancas = $_POST["NumeroCriancas"]; 
$NumeroQuartos = $_POST["NumeroQuartos"]; 
$UsuarioId = $_SESSION['UsuarioId'];
$ValorReserva = $_POST["ValorReserva"];
$DataChegada = $_POST["DataChegada"];
$DataPartida = $_POST["DataPartida"];
//ver como pegar o valor da reserva e usuarioId(talvez deixar passando o valor escondido?passando em algum componente)
//monta sql para o banco de dados ,
$sql = "INSERT INTO reserva (ReservaId,NumeroAdultos,NumeroCriancas,NumeroQuartos,UsuarioId,ValorReserva,DataChegada,DataPartida) VALUES ('', '$NumeroAdultos', '$NumeroCriancas', '$NumeroQuartos', '$UsuarioId', '$ValorReserva', '$DataChegada', '$DataPartida')";


// echo "New record has id: " . $mysqli -> insert_id;
if( $mysqli -> query($sql)=== TRUE){
	echo "<div class='alert alert-success'>Successfully added new user</div>";
}else{
	echo "<div class='alert alert-danger'>Error: There was an error while adding new reserv</div>";
}
$mysqli -> close();

    //caminho pra passar pra página do diego
	header("location: TelaReservaHospedagem.html");

?>
