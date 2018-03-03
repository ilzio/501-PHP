<?php

/**
 *
 */
class Foo
{
  private $dados = [];
//set magico para criar propriedades que nao existen,

  function __set($name,$value) //recebe dos parametros, qualquer nome
  {
    //cria propriedade e da o valor pra ela
    $this->dados[$name]=$value;

  }

  //tentando acessar atributo indefinido cai no metodo get
  function __get($name) //recebe um parametro, qualquer nome
  {
    //cria propriedade e da o valor pra ela
    return $this->dados[$name];
  }
  public function getDados(){
    return $this->dados;
  }
}
//set magico para criar propriedades que nao existen,
//nesse caso quando indicar um novo atributo nomecompleto o set magico interpreta ele com $name do atributo e $value do atributo
$a = new Foo();
$a->nomeCompleto = "Lucas";
$a->idade = 24;
$a->email = "mail@mail.com";
print_r($a->getDados());

// echo "$a->nomeCompleto";
