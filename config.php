<?php
function conectar(){





try{
$conexao= new PDO('mysql:host=fdb28.awardspace.net;dbname=3741015_banco','3741015_banco','password1');
$conexao->exeC("SET CHARCATER SET utf8");

} catch(\throwable $th){

return $th;
die;
}

return $conexao;
}
?>


