<?php

class Aluno
{
  public $nome;

}

$lucas = new Aluno();

$lucas->nome="Lucas";

echo $lucas->nome;
//duas variaveis usam mesmo valor, apontam pro mesmo objeto
// $joao = $lucas;

// echo $joao->nome;
//
// $joao->nome="joao";

echo $lucas->nome;

//para copiar objeto pra otra variavel

$joao = clone $lucas;

echo $lucas->nome;

var_dump($lucas);
var_dump($joao);
