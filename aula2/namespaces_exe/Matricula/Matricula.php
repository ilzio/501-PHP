<?php

namespace Escola\Matricula;
//chamada para os namespaces
use Escola\Aluno\Aluno;
use Escola\Turma\Turma;

class Matricula
{

    private $aluno;
    private $matricula;
    private $nota1;
    private $nota2;

//requere dos objetos como parametros

    function __construct(Aluno $aluno, Turma $turma)
    {
      $this->aluno=$aluno;
      $this->turma=$turma;
    }

    public function getAluno(){
      return $this->aluno;
    }
    public function setCurso(Aluno $aluno){
      return $this->aluno = $aluno;
    }
    public function getTurma(){
      return $this->turma;
    }
    public function setTurma(Turma $turma){
      return $this->turma = $turma;
    }

}
