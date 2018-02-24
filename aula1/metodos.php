<?php

echo "<pre>";

class Caneta
{

  //atributos/propriedades

  public $cor;
  public $marca;
  public $tampada;

  // Metodos (sempre e bom usar verbos para chamar os metodos, sao accoes que vao ser executadas),
  // dentro dos parametros e inserida uma variavel padrao que sera definida no momento de chamar o metodo
  //o this representa o objeto dentro da clase
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
}

$azul = new Caneta();
$vermelha = new Caneta();

// operador de acceso '->' modifica atributos do objeto, nao precisa de $!!!

$azul->cor = "azul";
$azul->marca = "qualquer";

$vermelha->cor = "vermelha";
$vermelha->marca = "BIC";

var_dump($azul);
var_dump($vermelha);

// operador de acceso '->' pega os atributos do objeto, nao precisa de $!!!

var_dump($azul->cor);
var_dump($vermelha->marca);

echo "<hr>";
// operador de acceso '->' chama os metodos do objeto, precisa de () depois do nome!!!

$azul->escrever("uma caneta azul");
echo "<br>";
$vermelha->escrever("uma caneta vermelha");

$azul->tampar();
echo "<br>";
$vermelha->destampar();

echo "<br> <hr> <br>";
echo "executando os metodos tampar e destampar <br>";


var_dump($azul);
var_dump($vermelha);

echo "<br> <hr> <br>";
echo "executando o metodo getcor <br>";

echo 'a caneta e:' . $vermelha->getCor();
