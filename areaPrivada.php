<?php
session_start();
if (!isset($_SESSION['UsuarioId'])) {
	header("location: index.php");
	exit;
}
?>



SEJA BEEEEEEEEM VINDOOOO!!
<a href="sair.php"> Sair </a>