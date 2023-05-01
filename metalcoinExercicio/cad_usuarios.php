<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadatro</title>
    <link rel="icon" href="/img/logo.png">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/cadastro.css">
  </head>
  <body>
    <div class="cadastro">
        <label class="text_cadastro1">Metal Coin</label>
        <br>
        <label class="desc">Registre-se e ganhe 100 coins para gastar</label>
        <br>
        <label class="desc1">Da forma que desejar!</label>
    </div>
        <h1 id="cadastro">Cadastro</h1>
        <form action="crud/cad_usuario.php" method="post" id="formulario">
        <div>
          <label style="top: 190px"class="nome" for="inputNome">Nome</label>
          <input style="top: 235px;" class="input1" type="text" name="nome">
        </div>
        <br>
        <div>
          <label class="dt_nascimento" for="inputEmail">Data De Nascimento</label>
          <input style="top: 317px;" class="input1" type="date" name="dt_nascimento">
        </div>
        <br>
        <div>
          <label style="top: 358px;" class="nome" for="inputEmail">Endereço</label>
          <input style="top: 399px;" class="input1" type="text" name="endereco">
        </div>
        <br>
        <div>
          <label style="top: 440px" class="nome" for="inputEmail">Email</label>
          <input style="top: 481px" class="input1" type="email" name="email">
        </div>
        <br>
        <div>
          <label style="top: 522px" class="nome" for="inputEmail">Login</label>
          <input style="top: 563px" class="input1" type="text" name="login">
        </div>
        <br>
        <label style="top: 604px" class="nome" for="inputSenha">Senha</label>
        <input style="top: 645px" class="input1" type="password" name="senha">
        <br>
        <div>
          <a style="left: 1200px;" class="ja_tenho" href="login.php">Já tenho uma conta</a>
        </div>
        <input class="bnt_cad" type="submit" value="CADASTRAR PESSOA">
        </form>
  </body>
</html>