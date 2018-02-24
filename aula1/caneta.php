<?php

echo "<pre>";

class Caneta
{
  public $cor;
  public $marca;
}

$azul = new Caneta();
$vermelha = new Caneta();

// operador de acceso '->' modifica atributos do objeto, nao precisa de $!!!

$azul->cor = "azul";
$azul->marca = "qualquer";
$vermelha->cor = "vermelha";
$vermelha->marca = "BIC";

var_dump($azul);
var_dump($vermelha);

// operador de acceso '->' pega os atributos do objeto, nao precisa de $!!!

var_dump($azul->cor);
var_dump($vermelha->marca);
