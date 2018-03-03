<?php

class Aluno
{
    private $nome;
    private $email;

    function __construct(string $nome, string $email)
    {
      $this->nome = $nome;
      $this->email = $email;
    }

    public function getNome(){
      return $this->nome;
    }
    public function setNome($nome){
      $this->nome = $nome;
    }
}


class Turma
{
    private $curso;
    private $periodo;

    function __construct(string $curso, string $periodo)
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
