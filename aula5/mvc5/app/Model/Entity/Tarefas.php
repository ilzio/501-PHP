<?php

namespace Model\Entity;

class Tarefas
{
  private $id;
  private $id_usuarios;
  private $descricao;
  private $status;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

    }

    public function getIdUsuarios()
    {
        return $this->id_usuarios;
    }

    public function setIdUsuarios($id_usuarios)
    {
        $this->id_usuarios = $id_usuarios;

    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;

    }

}
