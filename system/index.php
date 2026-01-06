<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


<div class="painelDaniel">
    <div class="topo  margin">
        <a href="index.php">
            <img src="img/logo.png" alt="">
        </a>
       
        
    </div>
    <div class="base space">
        <div class="menu"></div>
        <div class="paginas ">
            <?php 
                if(@$_GET['a'] == '') include 'pgs/home.php';
                if(@$_GET['a'] == 'cadastra') include 'pgs/cadastra.php';
                if(@$_GET['a'] == 'consulta') include 'pgs/consulta.php'; 
                if(@$_GET['a'] == 'orcar') include 'pgs/formOrcar.php';
                if(@$_GET['a'] == 'recibo') include 'pgs/recibo.php';
                
             ?>
           
        </div>
    </div>
</div>
  
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>

</html>