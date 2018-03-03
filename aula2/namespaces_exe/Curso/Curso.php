<?php
namespace Escola\Curso;

class Curso
{
  private $nome;
  private $cargaHoraria;
  function __construct(string $nome,int $horas)
  {
    $this->nome = $nome;
    $this->cargaHoraria = $horas;
  }



    public function getNome()
    {
        return $this->nome;
    }


    public function setNome(string $nome)
    {
        $this->nome = $nome;

    }

    public function getCargaHoraria()
    {
        return $this->cargaHoraria;
    }

    public function setCargaHoraria(int $cargaHoraria)
    {
        $this->cargaHoraria = $cargaHoraria;

    }

}
