<?php

/**
 *
 */
class Impressora
{

//forcar parametro do tipo documento so vai funcionar com instancias da classe Documento;
//para imprimir documentos e planilha se crea um DocGenerico e fazer que os outros herdem dele a o metodo getconteudo que sirve para a
// impressao

  public function imprimir(DocGenerico $doc) {
    $conteudo = $doc->getConteudo();
    echo $conteudo;
  }
}

class DocGenerico
{
  public function getConteudo() {
    return $this->conteudo;
  }
}


class Documento extends DocGenerico
{
  protected $conteudo;
  function __construct(string $conteudo) {
      $this->conteudo=$conteudo;
    }
}


class Planilha extends DocGenerico
{
  protected $conteudo;
  function __construct(array $conteudo) {
    foreach ($conteudo as $linha) {
      $this->conteudo = implode(";", $linha)."<br>";
      }
  }
}

$impr= new Impressora;
$doc = new Documento("ciao");
$impr->imprimir($doc);
$doc2 = new Documento(" cammelo");
$impr->imprimir($doc2);
