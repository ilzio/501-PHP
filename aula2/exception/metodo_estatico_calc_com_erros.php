<?php


class NumNegException extends Exception {

}
class MenorQueZeroException extends Exception {

}
class NaoPodeDividirPorZeroException extends Exception {

}
class NumeroNegativoException extends Exception {

}
class MaiorQueCinquentaException extends Exception {

}
class ValorInfinitoException extends Exception {

}


class Calc
{
    public static function soma($a, $b)
  {
    if ($a < 0 || $b < 0) {
      throw new NumNegException();

    } else {
      return $a + $b;
    }
  }
  public static function subt($a, $b)
  {
    if ($a - $b < 0) {
      throw new MenorQueZeroException();

    } else {
      return $a - $b;
    }
  }
  public static function divi($a, $b)
  {
    if ($b === 0) {
    throw new NaoPodeDividirPorZeroException();
    } elseif ($a === 0) {
      throw new ValorInfinitoException();
    } else {
      return $a / $b;
      }
    }
  public static function mult($a, $b)
  {
    if ($b === 0) {
      throw new NaoPodeMultiplicarPorZeroException();
    }elseif ($a*$b >50) {
      throw new MaiorQueCinquentaException();
    } else {
        return $a * $b;
    }

  }
}

//e possivel chamar o metodo da Classe sem instanciar ela

try {
  echo "soma: " . Calc::soma(5,8);
} catch (NumeroNegativoException $e) {
  echo "Nao pode sumar numeros negativos";
} catch (Exception $e) {
  echo "erro";
  echo $e->getMessage();
}

echo "<br>";

try {
  echo "substra: " .  Calc::subt(5,8);
} catch (MenorQueZeroException $e) {
  echo "substra: " . "Resultado nao pode ser negativo";
} catch (Exception $e) {
  echo "erro";
  echo $e->getMessage();
}
echo "<br>";

try {
  echo "divi: " . Calc::divi(0,5);
} catch (NaoPodeDividirPorZeroException $e) {
  echo "divi: " . "Nao dividir por Zero";
} catch (ValorInfinitoException $e) {
  echo "divi: " . "Valor infinito";
} catch (Exception $e) {
  echo "erro";
  echo $e->getMessage();
}


echo "<br>";

try {
  echo "multi: " .Calc::mult(5,15);
} catch (NaoPodeMultiplicarPorZeroException $e) {
  echo "Nao pode multiplicar por zero";
} catch (MaiorQueCinquentaException $e) {
  echo "multi: " ."Resultado nao pode ser maior que cinquenta";
} catch (Exception $e) {
  echo "erro";
  echo $e->getMessage();
}
echo "<br>";
