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


      //nao precisa pasar o numero da conta porque e gerado pelo metodo gerarNum
      //nao precisa pasar o saldo e o status porque e pasado pela funcao abrirConta
      public function __construct(string $titular, string $tipo){
        echo "<br>...construindo... <br> <br>";
        $this->numConta = $this->gerarNum();
        $this->abrirConta($titular, $tipo);

    }

      public function verSaldo() {
        return $this->saldo;
      }

      public function verTipo() {
        return $this->tipo;
      }

      // public function verStatus() {
      //   return $this->status;
      // }

      public function getTitular() {
        return $this->titular;
      }

      public function sacar(int $valor){
        if ($this->saldo >= $valor && $this->status == true) {
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

      public function depositar(int $valor) {
        if ($this->status == true) {
          echo "Estou depositando:<strong> $valor R$ </strong> <br>";
          $this->saldo += $valor;
          echo "O novo saldo da conta numero<strong> $this->numConta</strong> e: " . $this->verSaldo() . " R$ ";
        } else {
          echo "nao pode depositar, a conta esta fechada";
        }
      }


      public function getStatus() {
        return $this->status;
      }
      private function setStatus(bool $status) {
          $this->status = $status;

      }
      public function abrirConta(string $titular, string $tipo) {
          $this->tipo = $tipo;
          $this->titular = $titular;

        if ("CC" == $tipo) {
          $this->saldo = 100;
          $this->status=true;
        } elseif ("CP" == $tipo) {
          $this->saldo = 150;
          $this->status=true;
        } else {
          echo "<strong> TIPO DE CONTA INVALIDO! </strong>";
          echo "Por favor, selecionar 'CC' ou 'CC'";
          die();
        }
      }

      public function fecharConta() {
        echo "<hr> <br> <br>";
        echo "<strong>Fechando a conta numero $this->numConta com titular $this->titular: </strong> <br> ";
        if ($this->saldo === 0) {
          $this->setStatus(false);
          echo "<br>A conta foi fechada";
        } elseif ($this->saldo < 0) {
          echo "<br>O seu saldo e' $this->saldo R$, voce nao pode fechar a conta com saldo negativo";
        } elseif ($this->saldo > 0) {
          echo "<br>O seu saldo e' $this->saldo R$, voce nao pode fechar a conta com saldo positivo";
        }


      }


}

/**
 *
 */
class ContaCorrente extends AnotherClass
{

  function __construct(argument)
  {
    # code...
  }
}


//criacao do objeto como instancia da clase e passando por parametro apenas o nome do titular porque o num conta e o saldo sao definidos por parametro no constructor


//       $conta1 = new Conta("Joaquin", 200, "CC", true);
//
//       echo "Saldo atual da conta numero<strong> $conta1->numConta</strong> com titular " . $conta1->verTitular() . " e: " . $conta1->verSaldo() . " R$";
//
//       echo "<br> <br>";
//       $conta1->sacar(100);
//       echo "<br> <br>";
//       $conta1->depositar(150);
//       echo "<br> <br>";
//       $conta1->sacar(300);
//       echo "<br> <br>";
//       $conta1->depositar(2500);
//
//       echo "<br> <hr> <br>";
//       echo "VAR DUMP";
//       echo "<br> <br>";
//       var_dump($conta1);
//       echo "<br> <hr> <br>";
//
//
// //criacao do objeto como instancia da clase e passando por parametro o nome do titular e o saldo
//
//       $conta2 = new Conta("Maria", 2000, "CP", false);
//
//       echo "Saldo atual da conta numero<strong> $conta2->numConta</strong> com titular " . $conta2->verTitular() . " e: " . $conta2->verSaldo() . " R$";
//       echo "<br> <br>";
//
//       $conta2->sacar(100);
//       echo "<br> <br>";
//       $conta2->depositar(150);
//       echo "<br> <br>";
//       $conta2->sacar(300);
//       echo "<br> <br>";
//       $conta2->depositar(2500);
//
//       echo "<br> <hr> <br>";
//       echo "VAR DUMP";
//       echo "<br> <br>";
//       var_dump($conta2);
//
//       echo "<br> <hr> <br>";

$conta1= new Conta("Joaquin", "CC");


// var_dump($conta1);

echo "<br> <hr> <br>";

// $conta2= new Conta("Maria", "CC");
//
// var_dump($conta2);

$conta1->sacar(250);
//       echo "<br> <br>";
//       $conta1->depositar(150);
//       echo "<br> <br>";
//       $conta1->sacar(300);
      echo "<br> <br>";
// $conta1->depositar(2500);

$conta1->fecharConta();
