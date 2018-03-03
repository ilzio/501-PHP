<?php

class Caneta
{
  private static $tamanho = 10;
  private $cor;
  public function __construct($cor)
  {
    $this->cor=$cor;
  }

//acessar atributo statico self::$nomeatributo
    public function getTamanho()
    {
        return self::$tamanho;
    }



    public function getCor()
    {
        return $this->cor;
    }


    public function setCor($cor)
    {
        $this->cor = $cor;
     }

}
//nao precisa instanciar um objeto porque o atributo estatico existe independentemente das instancias da classe
// echo Caneta::$tamanho;

$azul = new Caneta("azul");
$preta = new Caneta("preta");
echo $preta->getTamanho();
