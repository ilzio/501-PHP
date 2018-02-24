<?php

// clase abstracta
abstract class Conta
{
  // metodos abstractos, nao monta metodo com chaves
  abstract function exibeConta();
}


class ContaCorrente extends Conta
{


}

$class= new Conta(); // da erro, nao pode ser instanciada
$class= new ContaCorrente();
