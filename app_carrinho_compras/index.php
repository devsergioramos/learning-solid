<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();
echo "Status: ".$carrinho1->exibirStatus();
echo "<br />";
echo "Carrinho: ";
print_r($carrinho1->exibirItens());
echo "<br />";
echo "Valor Total: ".$carrinho1->exibirValorTotal();

// $carrinho1->adicionarItem("Bicicleta", 750.10);
// $carrinho1->adicionarItem("Geladeira", 1950.15);
// $carrinho1->adicionarItem("Tapete", 350.20);

$carrinho1->adicionarItem("Televisão 65", 3570.25);

echo "<br />";
echo "<br />";
echo "Carrinho: ";
print_r($carrinho1->exibirItens());
echo "<br />";
echo "Valor Total Recalculado: ".$carrinho1->exibirValorTotal();
echo "<br />";

if($carrinho1->confirmarPedido()) {
    echo "Pedido realizado com sucesso!";
} else {
    echo "Erro na confirmação do pedido. Carrinho não possui itens.";
}

echo "<br />";
echo "Status: ".$carrinho1->exibirStatus();