<?php

namespace Controller;
use Model\UsuariosModel;
use Lib\ViewModel\ViewModel;
class UsuariosController
{
	private $usuariosModel;
	private $viewModel;
	public function __construct(){
		$this->usuariosModel = new UsuariosModel();
		$this->viewModel = new ViewModel();
	}

// todos os usuarios

	public function index(){
    $usuarios = $this->usuariosModel->all();
		$this->viewModel->render('usuarios/index',['usuarios' => $usuarios]);
	}

	//manda pro banco
	public function edit($id){

    $usuarios = $this->usuariosModel->find($id);
		$this->viewModel->render('usuarios/edit',['usuarios' => $usuarios]);
	}


	public function update($id){
		$this->viewModel->usuariosModel->update($id);
	}

	//imprime na tela
	public function new(){
		$this->viewModel->render('usuarios/new');
	}

	//manda pro banco
	public function create(){
		$this->usuariosModel->insert($_POST);
		header('Location:?r=usuarios');
	}
	public function delete($id){
		echo "delete $id";
	}
}
