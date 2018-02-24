<?php

echo "<pre>";

//criacao de clase com atributos

class Conta
{

// atributos

      public $numConta;
      private $saldo;
      private $titular;
      private $tipo;
      private $status;


// metodos

      // pra criar numero de conta random, cria metodo que gera numero random
      private function gerarNum() {
      $numConta = rand(1000, 9999);
      return $numConta;
    }

      //saldo=0 pasado por parametro
      //nao precisa pasar o numero da conta porque e gerado pelo metodo gerarNum
      public function __construct(string $titular, int $saldo, string $tipo, bool $status){
        echo "<br>...construindo... <br> <br>";
        // pra criar numero de conta random, metodo e chamado no constructor
        $this->numConta = $this->gerarNum();
        $this->saldo = $saldo;
        $this->titular = $titular;
    }

      public function verSaldo() {
        return $this->saldo;
      }

      public function verTipo() {
        return $this->tipo;
      }

      public function verStatus() {
        return $this->status;
      }

      public function verTitular() {
        return $this->titular;
      }

      public function sacar(int $valor){
        if ($this->saldo <= $valor) {
        echo "Estou sacando:<strong> $valor R$ </strong> <br>";
        $this->saldo -= $valor;
        echo "O novo saldo da conta numero<strong> $this->numConta</strong> e: ". $this->verSaldo() . " R$ ";
      } else {
        echo "nao pode sacar dinheiro, nao tem saldo suficiente";
      }
      }

      public function depositar(int $valor) {
        echo "Estou depositando:<strong> $valor R$ </strong> <br>";
        $this->saldo += $valor;
        echo "O novo saldo da conta numero<strong> $this->numConta</strong> e: " . $this->verSaldo() . " R$ ";
      }

      public function getStatus() {

      }
      public function setStatus() {

      }
      public function abrirConta($tipo, $titular) {
        if ($tipo == CC) {
          $this->saldo = 100;
        } elseif ($tipo == CP) {
          $this->saldo = 150;
        }
        $this->status = true;
      }

      public function fecharConta {
        if ($this->saldo <= 0) {
          // nao pode executar;
        }
        $this->status = false;

      }

      public function setStatus() {

      }

}

//criacao do objeto como instancia da clase e passando por parametro apenas o nome do titular porque o num conta e o saldo sao definidos por parametro no constructor


      $conta1 = new Conta("Joaquin");

      echo "Saldo atual da conta numero<strong> $conta1->numConta</strong> com titular " . $conta1->verTitular() . " e: " . $conta1->verSaldo() . " R$";

      echo "<br> <br>";
      $conta1->sacar(100);
      echo "<br> <br>";
      $conta1->depositar(150);
      echo "<br> <br>";
      $conta1->sacar(300);
      echo "<br> <br>";
      $conta1->depositar(2500);

      echo "<br> <hr> <br>";
      echo "VAR DUMP";
      echo "<br> <br>";
      var_dump($conta1);
      echo "<br> <hr> <br>";


//criacao do objeto como instancia da clase e passando por parametro o nome do titular e o saldo

      $conta2 = new Conta("Maria", 2000);

      echo "Saldo atual da conta numero<strong> $conta2->numConta</strong> com titular " . $conta2->verTitular() . " e: " . $conta2->verSaldo() . " R$";
      echo "<br> <br>";

      $conta2->sacar(100);
      echo "<br> <br>";
      $conta2->depositar(150);
      echo "<br> <br>";
      $conta2->sacar(300);
      echo "<br> <br>";
      $conta2->depositar(2500);

      echo "<br> <hr> <br>";
      echo "VAR DUMP";
      echo "<br> <br>";
      var_dump($conta2);

      echo "<br> <hr> <br>";
