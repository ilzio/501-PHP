<?php

// criar excepcoes: o codigo nao trava, mas faz excepcoes para tratar erros, pode ser util para debugging, criar log e mandar pros desenvolvidores
// a classe exception e nativa do PHP, entao quando classes heredan ela, podem usar metodos nativos como por exemplo

// Exception {
// /* Propriedades */
// protected string $message ;
// protected int $code ;
// protected string $file ;
// protected int $line ;
// /* Métodos */
// public __construct ([ string $message = NULL [, int $code [, Throwable $previous = NULL ]]] )
// final public string getMessage ( void )
// final public Exception getPrevious ( void )
// final public mixed getCode ( void )
// final public string getFile ( void )
// final public string getLine ( void )
// final public array getTrace ( void )
// final public string getTraceAsString ( void )
// public string __toString ( void )
// final private string __clone ( void )
// }

class NaoPodeDividirPorZeroException extends Exception
{


}
class ValorinfinitoException extends Exception
{


}


function dividir($a,$b){

      if ($a === 0) {
        throw new ValorinfinitoException();

      }
      if ($b === 0) {
        throw new NaoPodeDividirPorZeroException("Nao pode dividir por zero");

      }

      return $a / $b;


}


try {
    dividir(5,0);
  } catch(NaoPodeDividirPorZeroException $e) {
  echo "Dividir por zero";

  } catch(ValorinfinitoException $e) {
    echo "Valor infinito";

} catch (Exception $e) {
  echo "erro";
  echo $e->getMessage();
}
