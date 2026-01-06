<div class="consulta">
    <form method="POST">
        <h2>CLIENTES</h2>
        <input type="text" name="campo" placeholder="Digite o nome do cliente">
        <button type="submit" hidden ></button>
    </form>
    <hr> 
    <table class="dados">
    <?php
          require_once 'conecta.php';
        
          if (isset($_GET['delete'])) {
            $id = (int) $_GET['delete'];
            $pdo->exec("DELETE FROM clientes WHERE id = $id");
            echo 'Deletado com Sucesso';
        }

            @$campo = $_POST['campo'];
            $sql = $pdo->prepare("SELECT * FROM clientes WHERE nome LIKE '%$campo%' OR tel LIKE '%$campo%'");
            $sql->execute();
            $cli = $sql->fetchAll();
            foreach ($cli as $key => $value) {  
                 if(isset($_POST['campo'])){  
    ?>
    <tr>
        <td>Nome: <?=$value['nome'];?> </td>
    </tr>    
    <tr>
        <td>E-mail: <?=$value['ende'];?> </td>
    </tr>   
    <tr>
        <td class="cpf" >CPF: <?=$value['cpf'];?> </td>
        <td class="tel" >Telefone: <?=$value['tel'];?> </td>
    </tr>  
    
    <td colspan="2" > <div class="mostra brd">
    Compra: <br> <?=$value['descricao'];?>
    </td>
   
       <?php 
        }}?>
        
    </table>
</div>