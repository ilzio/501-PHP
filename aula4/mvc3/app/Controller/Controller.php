<?php

namespace Controller;

use Model\Model;
use View\View;

class Controller
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model= new Model();
        $this->view= new View();
    }

    public function run()
    {
      $posts = $this->model->getPosts();
      $usuarios = $this->model->getUsuarios();
      //metodo render: passa dois parametros, a view e os dados
      $this->view->render('listaPostsUsuarios',
      ['posts' => $posts,
      'usuarios' => $usuarios,
      ]);
    }
}
