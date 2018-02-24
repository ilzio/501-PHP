<?php

echo "<pre>";

class Caneta
{

  //atributos/propriedades

  private $cor;
  private $marca;
  private $tampada;

//metodo magico, sempre comeca com __
  public function __construct($cor, $marca){
    echo "construindo <br>";
    $this->cor = $cor;
    $this->marca = $marca;
  }


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

$azul = new Caneta("azul", "BIC");
$vermelha = new Caneta("vermelha", "qualquer");



// var_dump($azul);
// var_dump($vermelha);
//
// echo "<br> <hr> atribuicao de valores iniciais para parametros privados com metodos <hr> <br> ";
//
//
// $azul->setCor("azul");
// $azul->setMarca("qualquer");
// $vermelha->setCor("vermelha");
// $vermelha->setMarca("BIC");
//
//
//
var_dump($azul);
var_dump($vermelha);
//
//
// $azul->setCor("azul");
