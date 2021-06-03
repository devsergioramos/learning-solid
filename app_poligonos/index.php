<?php

require __DIR__.'/vendor/autoload.php';

use App\Poligono;
use App\poligonos\Retangulo;
use App\poligonos\Quadrado;

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);
echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3>Área do Retângulo: '.$poligono->getArea().'</h3>';

$poligono = new Poligono();
$poligono->setForma(new Quadrado());
$poligono->getForma()->setLargura(10);
echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3>Área do quadrado: '.$poligono->getArea().'</h3>';
