<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="pt-br">
    <meta charset="UTF-8">
    <link rel="stylesheet"href="css/bootstrap.css">
    <title></title>
    <style>
        h1{
            font-family:fantasy ;
            font-size: 22px;
            font-style:normal;
            font-weight: bolder;
        }
    </style>
</head>
<body>

<nav class="nav navbar-default" style="text-align: center">
    <h1>Carrinho de compras - Arbor</h1>
</nav>

<?php

if (isset($_POST['cpf'])){
    $ncpf = $_POST['cpf'];
}
if (isset($_POST['numcartao'])){
    $numerocartao = $_POST['numcartao'];
}

$pagamento = $_POST['pagamento'];
$nome = $_POST['nome'];

if($nome != null){
    if($pagamento == 1){
        if($ncpf != null){
            echo "<h2><p align = 'center'>Obrigado por comprar conosco</p></h2>";
            echo "<h4><p align = 'center'>Volte Sempre!</p></h4>";
        }
        else{
            echo "<h2><p align = 'center'>CPF INCORRETO</p></h2>";
            echo "<h4><p align = 'center'>Volte e redigite</p></h4>";
        }
    }
    elseif($pagamento == 2){
        if($numerocartao != null){
            echo "<h2><p align = 'center'>Obrigado por comprar conosco</p></h2>";
            echo "<h4><p align = 'center'>Volte Sempre!</p></h4>";
        }
        else{
            echo "<h2><p align = 'center'>NUMERO DE CARTÃO INCORRETO</p></h2>";
            echo "<h4><p align = 'center'>Volte e redigite</p></h4>";
        }
    }
}
else{
    echo "<h2><p align = 'center'>NOME INCORRETO</p></h2>";
    echo "<h4><p align = 'center'>Volte e redigite</p></h4>";
}
?>
</body>
</html>
