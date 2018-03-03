<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    require_once 'escola.php';
    $lucas = new Aluno("Lucas", "lucas@ciao.com");
    $turma = new Turma("501", "sabado");

    echo $lucas->getNome();
    echo "<br>";
    echo $turma->getCurso();

//esta pasando dos objetos como parametros

    $matriculaLucas = new Matricula($lucas,$turma);

    echo $matriculaLucas->getAluno()->getNome();

     ?>

  </body>
</html>
