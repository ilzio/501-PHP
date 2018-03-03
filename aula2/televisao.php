<?php

//interface televisao


interface Televisao
{
  public function aumentaVolume();
  public function diminuiVolume();
  //interface method tem parametro, deve ser implemetado com parametro!
  public function trocarCanal($canal);
  public function liga();
  public function desliga();
}

//interface televisao


class TV implements Televisao
{

  private $volume;
  private $canal;
  private $estado;

  public function aumentaVolume(){
    // ++$this->volume;
    $this->setVolume($this->getVolume() + 5);
  }
  public function diminuiVolume(){
    $this->setVolume($this->getVolume() - 5);
  }
  public function trocarCanal($canal){
    if ($this->getEstado()) {
      $this->setCanal($canal);
      echo "Novo canal: {$this->getCanal()}";
      }
  }
  public function liga(){
    $this->setEstado(true);
    $this->menu();
  }
  public function desliga(){
    $this->setEstado(false);
  }

  public function menu(){
    if ($this->getEstado()) {
    echo "<br>Televisao ligada  <br>";
    echo "Volume: {$this->getVolume()} <br>";
    echo "Canal: {$this->getCanal()} <br>";
  } else {
    echo "<br>A televisao esta desligada!";
  }
}

  public function __construct()
  {
    $this->setVolume(10);
    $this->setCanal(5);
    $this->setEstado(false);

  }

    public function getVolume()
    {
        return $this->volume;
    }


    public function setVolume($volume)
    {
        $this->volume = $volume;

    }


    public function getCanal()
    {
        return $this->canal;
    }


    public function setCanal($canal)
    {
        $this->canal = $canal;

    }


    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;

    }

}
