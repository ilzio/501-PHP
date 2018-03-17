<?php

namespace View;

class View
{

  public function render(array $dados)
  {
    //extract pega um array e divide cada indice vira uma variavel com o valor
    extract($dados);
    include 'src/hello.php';
  }
}
