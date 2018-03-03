<?php

//heranca multipla, uma classe herda de muitas classes, so se chama trait ferramenta para burlar heranca multipla nao suportada em PHP

trait Log
{
    public function escreverLog($msg){
      echo "Log da $msg";
    }
}

/**
 *
 */
class X
{

  }
class Y extends X
{
  //chamando o trait, pode chamar muitas traits 
  use Log;

  public function save(){
    $this->escreverLog("sucuni");
  }

}

$y = new Y;
$y->save();
