<?php


class Calc
{
    public static function soma($a, $b)
  {
    return $a + $b;
  }
  public static function subt($a, $b)
  {
    return $a - $b;
  }
  public static function divi($a, $b)
  {
    return $a / $b;
  }
  public static function mult($a, $b)
  {
    return $a * $b;
  }
}

//e possivel chamar o metodo da Classe sem instanciar ela

echo Calc::soma(5,8);
echo "<br>";
echo Calc::subt(5,8);
echo "<br>";
echo Calc::divi(5,8);
echo "<br>";
echo Calc::mult(5,8);
echo "<br>";
