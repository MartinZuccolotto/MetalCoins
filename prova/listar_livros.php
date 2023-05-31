<?php
  require("conn.php");
  $tabela = $pdo->prepare("SELECT idlivro, nome, valor FROM livro;");
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

    <body >
        <div class="div">
            <h1 style="text-align:center; color: white;">Tabela de Livros</h1>
            <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th style="left:1px;" class="letra" scope="col">Id</th>
      <th style="left:98px;" class="letra" scope="col">Nome</th>
      <th style="left:138px;"class="letra" scope="col">Valor</th>
      <th scope="col">    </th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($rowTabela as $linha){
      echo '<tr>';
      echo "<th class='letra' scope='row'>".$linha['idlivro']."</th>";
      echo "<td style='left:98px;' class='letra'>".$linha['nome']."</td>";
      echo "<td style='left:138px;'class='letra'>".$linha['valor']."</td>";
      echo '<td class="comprar" ><a href=crud\del_livro.php?idlivro='.$linha['idlivro'].' type="button">COMPRAR</a></td>';



      echo '</tr>';
    }
    ?>
  </tbody>
</table>
<a style="color: black;" href="index.php" type="button">CADASTRO DE LIVROS</a>
        </div>
       </body >
</html>