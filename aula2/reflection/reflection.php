<?php

//a partir do php 5 tem api que permite fazer engenharia reversa da classe
// da informacao sobre os atributos e os metodos

class Aluno
{
  public $nome;
  public function getNome()
  {
    return $this->nome;
  }
}

//pegar atrib e metodos

$reflection = new ReflectionClass('Aluno');
print_r($reflection->getProperties());
print_r($reflection->getMethods());
