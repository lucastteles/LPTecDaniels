<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js" defer></script>
<link rel="stylesheet" href="css/style.css">
<?php
    require_once 'conecta.php';
    include 'deleteCli.php';

    @$sql = $pdo->prepare("SELECT * FROM clientes ");
    $sql->execute();
    $cli = $sql->fetchAll();
    foreach ($cli as $key => $value) { ?>
            <table>
                <tr><td>Nome: <?=$value['nome']?> </td> </tr>
                <tr><td>End: <?=$value['ende']?> </td></tr>
                <tr> <td>Tel.: <?=$value['tel']?> </td></tr>
                <tr><td>
                    <a href="?delete=<?=$value['id']?>">
                        <box-icon name='trash'></box-icon>
                    </a>
                </td></tr>
            </table>
            <hr>
            
<?php }?>
    <a href="../index.php?a=home">
        <box-icon name='left-arrow'>Voltar</box-icon>Voltar
    </a>