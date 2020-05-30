<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

      <h2>
        <a href='UsuarioIncluir.php'>
          <img src="imagem/usuarios.png" alt="Incluir Usuarios"  width="45" height="45"> 
        </a>
        Lista dos usuários cadastrados no sistema
     </h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
        <?php
          require_once 'conectarBanco.php';
          $sql = "SELECT * FROM usuarios ";
          if ($result = $mysqli -> query($sql)) {
            while ($row = $result -> fetch_assoc()) {
            // echo $row[0]." ".$row[1];
            //  echo "<br><br>";
                echo "<tr><td>
                          
                          
                          <a href='UsuarioAlterar.php?id=".$row["id"].
                          "'>
                              <span class='glyphicon glyphicon-pencil'></span>
                          </a>


                          <a href='UsuarioExcluirOk.php?id=".$row["id"].
                          "'>
                              <span class='glyphicon glyphicon-remove'></span>
                          </a>
                          

                          </td><td>"
                          .$row["id"].
                         "</td><td>"
                         .$row["nome"].
                         "</td><td>"
                         .$row["email"].
                         "</td></tr>";
            }
            $result -> free_result();
          }
          $mysqli -> close();
        ?>
        </tbody>
      </table>
    </div>
</body>
</html>
