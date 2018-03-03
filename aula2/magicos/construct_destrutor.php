<?php

//destruct usado para destruir variaveis

class Foo
{

  public function __construct()
  {
    echo "construindo <br>";
  }
  public function __destruct()
  {
    echo "destruindo<br>";
  }
}


 $a = new Foo;
 unset($a);
 $b = new Foo;
 $c = new Foo;
