<?php

namespace Escola\Turma;
//chamada para os namespaces
use Escola\Aluno\Aluno;
use Escola\Curso\Curso;

class Turma
{
    private $curso;
    private $periodo;

    function __construct(Curso $curso, string $periodo)
    {
      $this->curso=$curso;
      $this->periodo=$periodo;
    }

    public function getCurso(){
      return $this->curso;
    }
    public function setCurso($curso){
      $this->curso = $curso;
    }
    public function getPeriodo(){
      return $this->periodo;
    }
    public function setPeriodo($periodo){
      $this->periodo = $periodo;
    }

}
