<?php
// abre conexao com o banco 
    require_once 'conectarBanco.php';
//    print_r($_POST); 
//    echo "<br><br>";
    $email = $_POST["email"]; 
    $senha = $_POST["senha"]; 
    //monta sql para o banco de dados 
    $sql = "SELECT * FROM usuarios where email = '".$email."' and senha = '".$senha."'";
//    echo $sql;
//    echo "<br><br>";
    $valido=false; 
    if ($result = $mysqli -> query($sql)) {
      if ($row = $result -> fetch_row()) {
        print_r($row);
        echo "<br><br>";
        $valido=true;
      }

      $result -> free_result();
    }
    $mysqli -> close();
    if ($valido==true)
      {
    	//echo 'usuario valido!'; 
    	header('Location: principal.php');
      }
    else
    	{
    	//	echo 'ERRO: usuario invalido!';
    	header('Location: index.php?login=erro');
     	}	
?>
