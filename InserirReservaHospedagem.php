
<?php
// abre conexao com o banco 
    require_once 'conectarBanco.php';

print_r($_POST); 
echo "<br><br>";
$NumeroAdultos = $_POST["NumeroAdultos"]; 
$NumeroCriancas = $_POST["NumeroCriancas"]; 
$NumeroQuartos = $_POST["NumeroQuartos"]; 
$UsuarioId = $_POST["UsuarioId"];
$ValorReserva = $_POST["ValorReserva"];
$DataChegada = $_POST["DataChegada"];
$DataPartida = $_POST["DataPartida"];
//ver como pegar o valor da reserva e usuarioId(talvez deixar passando o valor escondido?passando em algum componente)
//monta sql para o banco de dados ,
$sql = "INSERT INTO `reserva` (`ReservaId`, `NumeroAdultos`, `NumeroCriancas`, `NumeroQuartos`, `UsuarioId`, `ValorReserva`, `DataChegada`, `DataPartida`) VALUES ('', '".$NumeroAdultos."', '".$NumeroCriancas."', '".$NumeroQuartos."', '".$UsuarioId."', '".$ValorReserva."', '".$DataChegada."', '".$DataPartida."')";


$mysqli -> query($sql);
// echo "New record has id: " . $mysqli -> insert_id;
$mysqli -> close();

    //caminho pra passar pra página do diego
	header('.php');

?>
