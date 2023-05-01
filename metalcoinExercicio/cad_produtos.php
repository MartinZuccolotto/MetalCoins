<!DOCTYPE html>
<html lang="pt-br">
<head>
<head>
    <title>Cadastro Produtos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/cadprodutos.css">
  </head>
</head>
<body style="width: 920px;" >
<form action="crud/cad_produto.php" method="post">
    <div class="telafundo">
    <label class="metalcointxt">Metal Coin</label>
        <div class="telameio">
            <label class="cadprodtxt">Cadastrar Produtos</label>
            <label class="nome" >Nome:</label>
            <input class="barranome" type="text" name="nome">
            <label class="link">Link:</label>
            <input class="barralink" type="text" name="link">
            <label class="valor">Valor:</label>
            <input class="barravalor" type="text" name="valor">
            <button class="botao">Cadastrar Produto</button>
        </div>
    </div>
</form>
</body>
</html>