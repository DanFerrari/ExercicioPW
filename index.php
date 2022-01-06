<html>

<head>




</head>


<body>

    <form action="insert.php" method="GET">

        <div>
            <label for="IDNF">IDNF</label>
            <input name="ID_NF" required="required" placeholder="Digite o Id do item" type="number" min="1">
        </div>

        <div>
            <label for="IDITEM">IDITEM</label>
            <input name="ID_ITEM" required="required" placeholder="Digite o Id da Nota Fiscal" type="number" min="1">
        </div>

        <div>
            <label for="COD_PROD">CODIGO DO PRODUTO</label>
            <input name="COD_PROD" required="required" placeholder="Digite o Codigo do produto" type="number" min="1">
        </div>

        <div>
            <label for="VALOR_UNIT">VALOR DA UNIDADE</label>
            <input name="VALOR_UNIT" required="required" placeholder="Digite o Valor do Produto" type="number" min="0">
        </div>

        <div>
            <label for="QUANTIDADE">QUANTIDADE DE PRODUTO</label>
            <input name="QUANTIDADE" required="required" placeholder="Digite a quantidade de produtos" type="number" min="0">
        </div>

        <div>
            <label for="DESCONTO">DESCONTO</label>
            <input name="DESCONTO" required=" not required" placeholder="Digite o valor de desconto" type="number" min="0" max="100">
        </div>


        <input name="ENVIAR" type="submit" value="Enviar">

    </form>

</body>


</html>