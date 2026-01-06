<div class="cadastra">
    <h3>CADASTRAR CLIENTES</h3>
    <form action="" method="post">
        <input type="text" placeholder="Nome" name='nome' required >
        <input class="campo2" type="text" placeholder="Endereço" name='ende'>
        <input type="text" placeholder="CPF" name='cpf'>
        <input type="text" placeholder="Telefone" name='tel'><br>
        <textarea name="descricao"></textarea><br>
        <input type="submit" value="Cadastrar">
    </form>
</div>

<?php 
    require_once 'conecta.php';

   if(isset($_POST['nome'])){
    @$sql = $pdo->prepare("INSERT INTO clientes VALUES(null, ?, ?, ?, ?, ?)");
    @$sql->execute(array($_POST['nome'],$_POST['ende'],$_POST['cpf'],$_POST['tel'],$_POST['descricao'] ));
    echo 'cadastrado com sucesso';
   }
    
?>