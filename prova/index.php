<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/cadastro.css">
  </head>
  <body>
        <h1 class="cadastro" style="left: 924px; top: 37px;">Cadastro</h1>
        <form action="crud/cad_livro.php" method="post" id="formulario">
          <div id="div">
              <label class="Letra" >Nome:</label><br>
              <input class="barra" type="text" name="nome"><br>
              <label class="Letra" >Descrição:</label><br>
              <input class="barra" type="text" name="descricao"><br>
              <label class="Letra" >Valor:</label><br>
              <input class="barra" type="text" name="valor"><br>
              <label class="Letra" >Autor:</label><br>
              <input class="barra" type="text" name="autor"><br>
              
              
              <input type="submit" value="CADASTRAR LIVRO">
          </div>

        </form>
  </body>
</html>