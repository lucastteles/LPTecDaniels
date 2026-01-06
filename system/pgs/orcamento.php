<link rel="stylesheet" href="../css/style.css">
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js" defer></script>
<title> Orçamento Nº <?php @$number=$_POST['num']; $name = $_POST['dado']; echo $number .'-'. $name;?></title>

</div>
<div class="orcamento">
    <div class="topoOrcado">
       <img src="../img/topoOrcar.png" alt="Topo de Orçamento">
    </div>
    <hr>
    <div class="number margin">
        <span class="num">
           Orçamento Nº <?php @$number=$_POST['num']; echo $number; ?>
        </span>
        <span class="dia">Data: <?=date("d/m/Y")?> </span>
        <span class="prazo">Valido por 10 dias úteis</span>
    </div>
    <hr>
    
    <div class="cliente">
    <h3>Cliente</h3>
        <?php
            require_once 'conecta.php';
            @$campo = $_POST['dado'];
            $sql = $pdo->prepare("SELECT * FROM clientes WHERE nome LIKE '%$campo%'"  );
            $sql->execute();
            $cli = $sql->fetchAll();
            foreach ($cli as $key => $value) {  
                 if(isset($_POST['dado'])){ ?>
                    <table>
                        <tr><td>Nome: <?=$value['nome']?> </td> </tr>
                        <tr><td>End: <?=$value['ende']?> </td></tr>
                        <tr> <td>Tel.: <?=$value['tel']?> </td></tr>
                    </table>
                 <?php }}?>
    </div>
    <hr>
    <div class="baseOrcado">
     <!-- <box-icon size="32" name='plus-square' type='solid'></box-icon> -->
     <h3>Produto/Serviço</h3>
     <form class="formulario">
        <input type="text" class="quantidade" placeholder="Quant.">
        <input type="text" class="descricao" placeholder="Descrição.">
        <input type="text" class="valor" placeholder="Valor">
        <input type="submit" hidden >
     </form>
     <div class="dados">
        <table></table>
        <hr>
        <div class="total">
           <span></span>
        </div>
        <hr>
         <div class="footerRecibo margin">
         <img src="../img/logoFooter.png" alt="logo">
         <img src="../img/ass.png" alt="assinatura">
      </div>
     </div>
    </div>
<div class="btnPrint"><button onClick="window.print()">Gerar PDF
</button></div>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/script.js"></script>

