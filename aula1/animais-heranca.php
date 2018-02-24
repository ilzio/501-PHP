<?php

class Animais
{
  protected $genero; //disponivel so dentro da classe que esta sendo criada
  protected $cor;

    public function getCor($cor){
        return $this->cor;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }

}

class Cachorro extends Animais
{



}
class Gato extends Animais
{
    // $this->genero;
}

$dog = new Cachorro;
$cat = new Gato;
echo "<pre>";
var_dump($dog->$genero);
var_dump($cat);

$dog->setCor("verde");
