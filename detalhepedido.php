<?php

$usuario_possui_cartao_loja = true;
$valor_compra = 99;

$valor_frete = 50;
$recebeu_desconto_frete = false;

if($usuario_possui_cartao_loja == true || $valor_compra >=400){
    $valor_frete = 0;

} else if($usuario_possui_cartao_loja && $valor_compra >= 360){
$valor_frete = 10;

} else if($usuario_possui_cartao_loja && $valor_compra >= 160){
    $valor_frete = 25;

} else {
    $recebeu_desconto_frete = false;
}

?>

<h1>Detalhes do pedido</h1>

<p>Possui cartão da loja ?
    <?php
        if($usuario_possui_cartao_loja == true ){
echo "SIM";

        }
        else if($usuario_possui_cartao_loja == false) {
echo "NÃO";

        }

    ?>

