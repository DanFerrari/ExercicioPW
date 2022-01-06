
<?php include_once'config.php';?>
<?php

$IDNF = $_GET['ID_NF'];
$IDITEM = $_GET['ID_ITEM'];
$CODPROD = $_GET['COD_PROD'];
$VALORUNIT = $_GET['VALOR_UNIT'];
$QUANTIDADE_ = $_GET['QUANTIDADE'];
$DESCONTO_ = $_GET['DESCONTO'];





$conexao = conectar();

$TABELA = 'itemNF';
$stmt = $conexao->prepare('INSERT INTO'.$TABELA.'(`ID_NF`,(`ID_ITEM`,`COD_PROD`,`VALOR_UNIT`,`QUANTIDADE`,`DESCONTO`) 
VALUES($IDNF,$IDITEM,$CODPROD,$VALORUNIT,$QUANTIDADE_,$DESCONTO_ )');




$stmt->execute();

?>
