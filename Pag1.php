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
            font-style:normal ;
            font-weight: bolder;
        }
        td{
            text-align: center;


        }
    </style>

</head>
<body>

    <nav class="nav navbar-default" style="text-align: center">

    <h1>Carrinho de compras - Arbor</h1>
    </nav>

<form name="pag1" method="POST" action="Pag2.php">
<div class="tabela1">
    <table class="table table-hover">
        <TR>
            <td><input onclick="" type="Checkbox" name="p1" value = "0" class="form-control"></td>
            <td>iPhone</td>
            <td><a href="Imagens/iPhone.png" target="parent"><img src="Imagens/iPhone.png" width="100px" ></td>
            <td>R$ 2000,00</td>
            <td><input type="number" name="numero1" value="1" min="1" size="4" maxlength="4" class="form-control"></td>
        </TR>
        <TR>
            <td><input type="Checkbox" name="p2" value = "1" class="form-control"></td>
            <td>Headphone</td>
            <td><a href="Imagens/Headphone.png" target="parent"><img src="Imagens/Headphone.png" width="100px"></td>
            <td>R$ 100,00</td>
            <td><input type="number" name="numero2" value="1" min="1" class="form-control"></td>
        </TR>
        <TR>
            <td><input type="Checkbox" name="p3" value = "1" class="form-control"></td>
            <td>Notebook Dell</td>
            <td><a href="Imagens/Notebook%20Dell.png" target="parent"><img src="Imagens/Notebook%20Dell.png" width="100px"></td>
            <td>R$ 2400,00</td>
            <td><input type="number" name="numero3" value="1" min="1" class="form-control"></td>
        </TR>
        <TR>
            <td><input type="Checkbox" name="p4" value = "1" class="form-control"></td>
            <td>Mouse Razer</td>
            <td><a href="Imagens/Mouse%20Razer.png" target="parent"><img src="Imagens/Mouse%20Razer.png" width="100px"></td>
            <td>R$ 300,00</td>
            <td><input type="number" name="numero4" value="1" min="1" class="form-control"></td>
        </TR>
        <TR>
            <td><input type="Checkbox" name="p5" value = "1" class="form-control"></td>
            <td>Notebook Asus</td>
            <td><a href="Imagens/Notebook%20Asus.png" target="parent"><img src="Imagens/Notebook%20Asus.png" width="100px"></td>
            <td>R$ 1200,00</td>
            <td><input type="number" name="numero5" value="1" min="1" class="form-control"></td>

            <td><strong><p align="center"> Formas de Pagamentos:</p></strong>
                <pre>
                <input type = "radio" name="pagamento" value="1" checked>A vista
                <input type = "radio" name="pagamento" value="2">A prazo
                Parcelar em: <select name="parcelas">
                        <option value="1">1x</option>
                        <option value="2">2x</option>
                        <option value="3">3x</option>
                        <option value="4">4x</option>
                        <option value="5">5x</option>
                        <option value="6">6x</option>
                        <option value="7">7x</option>
                        <option value="8">8x</option>
                        <option value="9">9x</option>
                        <option value="10">10x</option>
                        <option value="11">11x</option>
                        <option value="12">12x</option>
                    </select>
                <input type="Submit" value="Enviar"  name="enviar"> <input type="Reset" value="Limpar" name="Cancelar">
                </pre></td>
        </TR>
    </table>
</form>
</body>
</html>