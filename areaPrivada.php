<?php
session_start();
if (!isset($_SESSION['UsuarioId'])) {
	header("location: index.php");
	exit;
}
else{
	header("location: TelaReservaHospedagem.html");
}
?>



SEJA BEEEEEEEEM VINDOOOO!!
<a href="sair.php"> Sair </a>