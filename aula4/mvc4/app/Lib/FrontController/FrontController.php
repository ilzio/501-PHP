<?php

namespace Lib\FrontController;

class FrontController
{
  public function run(){

//pegar a rota e fazer que cada / seja alguma coisa
    $rota = isset($_GET['r']) ? $_GET['r'] : 'index';

    $rota = explode('/', $rota);

//primeiro e'o controller

    $controller = isset($rota[0]) ? $rota[0] : 'index';
//logo e a acao
    $action = isset($rota[1]) ? $rota[1] : 'index';
//ultimo e'o id
    $_GET['id'] = isset($rota[2]) ? $rota[2] : null;
    $id = isset($rota[2]) ? $rota[2] : null;

//chama o controller por namespace
    $controller = 'Controller\\' .ucfirst($controller . 'Controller');

//instancia ele e executa acao usando variaveis variaveis!!
    $objController = new $controller();
    $objController->$action($id);


  }
}
