<?php

namespace Controller;

use Model\UsuariosModel;
use Lib\ViewModel\ViewModel;

class LoginController
{
    private $usuariosModel ;
    private $viewModel ;
    public function __construct()
    {
        $this->usuariosModel = new UsuariosModel();
        $this->viewModel = new ViewModel();
    }
    public static function isLogado()
    {
        if (!$_SESSION['logado']) {
          header('Location:?r=login/login');
        }
        return false;
    }

    public function login()
    {
        $this->viewModel->render('login/login');
    }

    public function logginin()
    {
      $logginIn = $this->usuariosModel->login($_POST);
      if ($logginIn) {
        header('Location:?r=tarefas');
      }
      die('erro');
    }

    public function logout()
    {
    }
}
