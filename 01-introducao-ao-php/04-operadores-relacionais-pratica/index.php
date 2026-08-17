<?php

require __DIR__ . "/../../senac/senac.php";
senacClassName("Operadores Relacionais - Prática", __LINE__);
?>

<?php senacClassSession("Operadores Relacionais - Prática", __LINE__);

$anoDeNascimento = 2008;
$anoAtual = 2026;

$idade = $anoAtual - $anoDeNascimento;

var_dump($idade);
var_dump($idade >= 18);
var_dump($idade == 30);

$ehIdoso = ($idade >= 60);
var_dump($ehIdoso);

$senhaCadastrada = "123456";
$senhaDoFormulario = "123456";

var_dump($senhaDoFormulario === $senhaCadastrada);

