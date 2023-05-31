
<?php

    include('../conn.php');

    if(isset($_GET['idlivro'])){
        $idlivro = $_GET['idlivro'];
    }
    
    $del_livro = $pdo->prepare('DELETE from livro where idlivro = :idlivro;');
    $del_livro->execute(array(':idlivro'=>$idlivro));

    echo "<script>
        alert('Livro Comprado!')
        window.location.href='../listar_livros.php'
        </script>";
?>

