<?php
    include ('../conn.php');

    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    if(empty($nome) || empty($valor)){
        echo "Voce precisa preencher todos os campos";

    }   else    {
        try{
        $cad_livro = $pdo->prepare('INSERT INTO livro (nome, valor) values (:nome, :valor)');
        $cad_livro->execute(array(
            ':nome'=>$nome,
            ':valor'=>$valor,
        )
        );
        
        echo "<script>
        alert('Livro Cadastrado!')
        window.location.href='../listar_livros.php'
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