<?php

//clase pai conta

class Conta
{

    protected $titular;
    protected $saldo;
    protected $numConta;

    public function getTitular(){
      return $this->titular;
    }
    public function setTitular($titular){
      $this->titular = $titular;
    }

    public function setConta(){
      $this->numConta= rand();
    }
    public function getSaldo(){
      return $this->saldo;
    }
    public function sacar(int $valor){
      if (getSaldo() >= $valor ) {
      echo "Estou sacando:<strong> $valor R$ </strong> da conta numero<strong> $this->numConta</strong> com titular $this->titular <br>" ;
      $this->saldo -= $valor;
      echo "O novo saldo da conta numero<strong> $this->numConta</strong> e: ". $this->verSaldo() . " R$ ";
    } elseif ($this->saldo < $valor && $this->status == true) {
      echo "Voce esta tentando sacar:<strong> $valor R$ </strong> da conta numero<strong> $this->numConta</strong> com titular <strong> $this->titular </strong> <br>";
      echo "Saldo insuficiente, o seu saldo e $this->saldo R$";
    } else {
      echo "Nao pode sacar dinheiro, a conta esta fechada";
      }
    }
    public function depositar(){

    }


}

class ContaCorrente extends Conta
{


// sacar -cobrar juros

}


class ContaPoupanca extends Conta
{
// sacar - sem juros

}
