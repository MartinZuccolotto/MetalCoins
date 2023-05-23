<?php
  require("conn.php");

  $tabela = $pdo->prepare("SELECT idlivro, nome, descricao, valor, autor FROM biblioteca;");

  $tabela->execute();

  $rowTabela = $tabela->fetchAll();

  if (empty($rowTabela)){
    echo "<script>
        alert('Tabela Está Vazia!')
        </script>";
  };
?>

<!DOCTYPE HTML>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="css/listar.css">
        <title>Tabela De livros</title>
        </head>

    <body style="background-color: black;">
        <div class="container">
            <h1 style="text-align:center; color: white;">Tabela de Livros</h1>
            <table class="table table-dark table-striped">
  ...

  <thead>
    <tr  >
      <th class="letra" scope="col">Id</th>
      <th class="letra" scope="col">Nome</th>
      <th class="letra" scope="col">Descricao</th>
      <th class="letra" scope="col">Valor</th>
      <th class="letra" scope="col">Autor</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($rowTabela as $linha){
      echo '<tr>';
      echo "<th class='letra' scope='row'>".$linha['idlivro']."</th>";
      echo "<td class='letra'>".$linha['nome']."</td>";
      echo "<td class='letra'>".$linha['descricao']."</td>";
      echo "<td class='letra'>".$linha['valor']."</td>";
      echo "<td class='letra'>".$linha['autor']."</td>";
      echo '</tr>';
    }
    ?>
  </tbody>
</table>
<a href="index.php" type="button" class="btn btn-primary float-end">CADASTRO DE LIVROS</a>
        </div>
       </body >
</html>