<!DOCTYPE html>
<html lang="pt-br">
<head>
<head>
    <title>Login</title>
    <link rel="icon" href="/img/logo.png">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login.css">
  </head>
</head>
<body>
<div class="loginpg">
    <label class="metalcoin">Metal Coin</label>
    <label class="textlogin" >Login</label>
</div>
<form action="logar.php" method="post">
    <label class="login" >Login</label>
    <input class="barralogin" type="text" name="login" id="">
    <label class="senha">Senha</label>
    <input class="barrasenha" type="password" name="senha" id="">
    <button class="botao">enviar</button>
    <a class="criarconta" href="cad_usuarios.php">Ainda nao tem uma conta?<br> Cadastre-se já!</a>
</form>
</body>
</html>