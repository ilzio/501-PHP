<?php

echo "<pre>";

//criacao de clase com atributos

class Conta
{
  public $numConta;
  public $saldo;


  public function sacar(int $valor){
    echo "Estou sacando:<strong> $valor R$ </strong> <br>";
    $this->saldo = $this->saldo - $valor;
    echo "O novo saldo da conta numero<strong> $this->numConta</strong> e:<strong> $this->saldo R$ </strong>";
  }
  public function depositar(int $valor) {
  echo "Estou depositando:<strong> $valor R$ </strong> <br>";
  $this->saldo += $valor;
  //versao menor de  $this->saldo = $this->saldo + $valor;

  echo "O novo saldo da conta numero<strong> $this->numConta</strong> e:<strong> $this->saldo R$ </strong>";


  }
}

//criacao do objeto como instancia da clase

$conta1 = new Conta();

//atribuicao de valores para os atributos

$conta1->numConta = 123654;
$conta1->saldo = 258;



//mostrando so os valores dos atributos

echo "Saldo atual da conta numero<strong> $conta1->numConta</strong> e:<strong> $conta1->saldo R$ </strong>";
echo "<br> <hr> <br>";

$conta1->sacar(100);
echo "<br> <br>";
$conta1->depositar(150);
