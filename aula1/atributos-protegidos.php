<?php

echo "<pre>";

class Caneta
{

  //atributos/propriedades

  private $cor;
  private $marca;
  private $tampada;


  public function escrever(string $texto){
    echo "estou escrevendo: $texto";

  }
  public function destampar(){
    $this->tampada = false;

  }
  public function tampar(){
    $this->tampada = true;

  }
  public function getCor(){
    return $this->cor;

  }
  public function setCor($cor){
    $this->cor = $cor;

  }
  public function getMarca(){
    return $this->cor;

  }
  public function setMarca($marca){
    $this->marca = $marca;

  }
}

$azul = new Caneta();
$vermelha = new Caneta();



var_dump($azul);
var_dump($vermelha);

echo "<br> <hr> atribuicao de valores iniciais para parametros privados com metodos <hr> <br> ";


$azul->setCor("azul");
$azul->setMarca("qualquer");
$vermelha->setCor("vermelha");
$vermelha->setMarca("BIC");



var_dump($azul);
var_dump($vermelha);


$azul->setCor("azul");
