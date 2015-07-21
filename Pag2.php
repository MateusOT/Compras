<!DOCTYPE html>
<html>
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
$soma=0;
$parcela=0;
$total=0;
$nparcela = $_POST['parcelas'];
$pagamento = $_POST['pagamento'];
$qtd1 = $_POST['numero1'];
$qtd2 = $_POST['numero2'];
$qtd3 = $_POST['numero3'];
$qtd4 = $_POST['numero4'];
$qtd5 = $_POST['numero5'];


if ( isset( $_GET['pag'] ) ){
    $pag = $_GET['pag'];
}
else{
    $pag = 'valor padrão';
}




if($pagamento == 1) {
    if (isset($_POST['p1'])) {
        $soma = $soma + (2000 * $qtd1);
    }
    if (isset($_POST['p2'])) {
        $soma = $soma + (100 * $qtd2);
    }
    if (isset($_POST['p3'])) {
        $soma = $soma + (2400 * $qtd3);
    }
    if (isset($_POST['p4'])) {
        $soma = $soma + (300 * $qtd4);
    }
    if (isset($_POST['p5'])) {
        $soma = $soma + (1200 * $qtd5);
    }

    $total = $soma - (($soma*5)/100);
}

else if($pagamento == 2) {
    if (isset($_POST['p1'])) {
        $soma = $soma + (2000 * $qtd1);
    }
    if (isset($_POST['p2'])) {
        $soma = $soma + (100 * $qtd2);
    }
    if (isset($_POST['p3'])) {
        $soma = $soma + (2400 * $qtd3);
    }
    if (isset($_POST['p4'])) {
        $soma = $soma + (300 * $qtd4);
    }
    if (isset($_POST['p5'])) {
        $soma = $soma + (1200 * $qtd5);
    }

    $total = $soma + (($soma*10)/100);

    $parcela = ($total / $nparcela);
}
?>

<form name="pag2" method="POST" action="Pag3.php">

    <input type = "hidden" name="pagamento"  value="<?php echo $_POST['pagamento']?>">

    <strong><p align="center">Pagamento e Confirmação:</p></strong>
    <pre>

        <?php echo "<p align='center'>Valor Total da Compra: R$ $soma</p>";

        if($pagamento == 1){
            echo "<p align='center'>Valor Total Com Desconto de 5%: R$ $total</p>";
            echo "<p align='center'>Nome: <input type='text' name='nome' size='25' maxlength='30'></p>";
            echo "<p align='center'>CPF: <input type='text' name='cpf' size='25' maxlength='11'></p>";
        }
        elseif($pagamento == 2){
            echo "<p align='center'>Valor Total Com Acréscimo de 10%: R$ $total</p>";
            echo "<p align='center'>Parcela de R$ $parcela para $nparcela mes(es)</p>";
            echo "<p align='center'>Nome: <input type='text' name='nome' size='25' maxlength='30'></p>";
            echo "<p align='center'>Número do Cartão: <input type='text' name='numcartao' size='35' maxlength='35'></p>";
        }
        ?>
        <br>
        <input type="submit" name="enviar" value="Confirmar e Enviar" class="form-control">
    </pre>
</form>
</body>
</html>