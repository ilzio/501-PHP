<?php

class Exec
{
  //metodo execute recebe uma funcao e os parametros
    public function execute($fn,array $args);
    call_user_func_array($fn,$array);

}

$n = new Exec();
$n->execute(function($valor,$valor2){
    echo $valor . PHP_EOL;
}, array("oi", "ola"));


echo "<hr>";

/**
 *
 */
class MyClass
{

  public function __invoke()
  {
    foreach (func_get_args() as $arg) {
      echo $arg;
    }
  }
}
