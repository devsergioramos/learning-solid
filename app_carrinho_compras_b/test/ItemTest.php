<?php

use App\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase {
    
    public function testEstadoInicialItem() {

        $item = new Item();

        // asserções do PHPUnit
        $this->assertEquals("" ,$item->getDescricao());
        $this->assertEquals(0 ,$item->getValor());

    }

    public function testGetESetDescricao() {
        $descricao = "Cadeira de plástico";

        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());
    }

    // sintaxe phpunit para data providers
    /**
    * @dataProvider dataValores
    */
    public function testGetESetValor($valor) {
        $valor = 24.99;

        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());
    }

    public function testItemValido() {
        
        $item = new Item();

        $item->setValor(50.90);
        $item->setDescricao("Pen Drive 32GB");

        // submeter um item válido e verificar se retorna true
        $this->assertEquals(true ,$item->itemValido());

        // submeter um item inválido e verficar se retorna false (descrição)
        $item->setValor(50.90);
        $item->setDescricao("");
        $this->assertEquals(false ,$item->itemValido());

        // submeter um item inválido e verficar se retorna false (descrição)
        $item->setValor(0);
        $item->setDescricao("Pen Drive 32GB");
        $this->assertEquals(false ,$item->itemValido());

        // submeter um item com todas os atributos inválidos
        $item->setValor(0);
        $item->setDescricao("");
        $this->assertEquals(false ,$item->itemValido());
    }

    public function dataValores() {
        return [
            [100],
            [-2],
            [0],
            [1.99999],
            [50.00],
            [-2.30]
        ];
    }
}