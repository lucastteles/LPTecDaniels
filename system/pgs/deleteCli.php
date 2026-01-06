<?php 
    if (isset($_GET['delete'])) {
        $id = (int) $_GET['delete'];
        $pdo->exec("DELETE FROM clientes WHERE id = $id");
        echo 'Deletado com Sucesso';
    }
?>