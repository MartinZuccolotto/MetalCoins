<?php
    include ('../conn.php');

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $autor = $_POST['autor'];

    if(empty($nome) || empty($descricao) || empty($valor) || empty($autor)){
        echo "Voce precisa preencher todos os campos";

    }   else    {
        try{
        $cad_livro = $pdo->prepare('INSERT INTO biblioteca (nome, descricao, valor, autor) values (:nome, :descricao, :valor, :autor)');
        $cad_livro->execute(array(
            ':nome'=>$nome,
            ':descricao'=>$descricao,
            ':valor'=>$valor,
            ':autor'=>$autor
        )
        );
        
        echo "<script>
        alert('Livro Cadastrado!')
        </script>";
        } catch (Exception $e){
            //echo "Erro";   
            //echo $e->getMessage();
            echo "<script>
            alert('Usuario já em uso!')
            window.location.href='../view/cadastro.php'
            </script>"; 
        }
    }

?>
