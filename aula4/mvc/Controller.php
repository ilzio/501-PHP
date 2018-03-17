<?php

include 'Model.php';

/**
 *
 */
class Controller
{
  private $model;
  function __construct()
  {
    //genera um objeto Model
    $this->model = new Model();
  }

  public function run(){

    //pega uma string com metodo e inclui a view 
    $string = $this->model->getString();
    include 'View.php';
  }
}
