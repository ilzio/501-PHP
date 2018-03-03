<?php

//diferente as classes que so podem ser herdadas umas a cada vez, multiples interfaces podem ser herdadas
//criacao multiples metodos abstratos, classe que implementa a interface vai ser obrigada a implemetar os metodos

interface ContaInterface
{
  public function sacar();
  public function depositar();
  public function verSaldo();

}

class ContaCorrente implements ContaInterface
{
  public function sacar(){}
  public function depositar(){}
  public function verSaldo(){}
}
