<?php

require __DIR__.'/vendor/autoload.php';

use App\Retangulo;
use App\Quadrado;

$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(8);

echo "<h3>Área do retângulo: " .$retangulo->getArea().  "</h3>";

$quadrado = new Quadrado();
$quadrado->setAltura(5);
$quadrado->setLargura(8);

echo "<h3>Área do quadrado: " .$quadrado->getArea().  "</h3>";

$retangulo = new Quadrado();
$retangulo->setAltura(5);
$retangulo->setLargura(8);

echo "<h3>Área do retângulo: " .$retangulo->getArea().  "</h3>";