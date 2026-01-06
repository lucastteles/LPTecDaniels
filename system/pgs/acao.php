<link rel="stylesheet" href="../css/style.css">
<?php
    @$numero = $_POST['num'];
    $valor = $_POST['val'];
    $nome = $_POST['cli'];
    $valorExt = $_POST['valExt'];
    $servico = $_POST['serv'];
    $data = $_POST['dia'];

    if(isset($_POST['num'])){
?>
<div class="acao">
    <div class="topoRecibo margin">
        <h1>Recibo</h1>
        <span>Nº <?=$numero;?></span>
        <p>R$ <?=number_format($valor,2,',','.');?></p>
    </div>
    <hr>
    <div class="baseRecibo">
        Recebemos de <span><?=$nome?></span>  a importancia de R$ <span><?=number_format($valor,2,',','.');?></span>
        ( <?=$valorExt;?> ), referente a <span><?=$servico;?></span>
        <br>
        <strong style="font-style:italic">Rio de Janeiro <?= date("d/m/Y", strtotime($data));?>.</strong>
        
    </div>
    <div class="footerRecibo margin">
        <img src="../img/logoFooter.png" alt="logo">
        <img src="../img/ass.png" alt="assinatura">
    </div>
    
</div>

<?php }?>
<div class="btnPrint"><button onClick="window.print()">Gerar PDF
</button></div>