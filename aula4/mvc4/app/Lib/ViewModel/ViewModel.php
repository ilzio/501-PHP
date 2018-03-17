<?php

//quando render e'chamado, view vai ser passada:
// exemplo $view = usuarios/new -> pasta e arquivo que quer abrir
//no container tem caminho completo do arquivo, tem verificacao de tipo se e'array para fazer o extract;

namespace Lib\ViewModel;
class ViewModel
{
	private $header = BASEDIR . '/app/View/layout/header.php';
	private $footer = BASEDIR . '/app/View/layout/footer.php';
	/*
	 * $view = 'usuarios/new'
	 */
	public function render($view,$data = null){
		$container = BASEDIR . '/app/View/' . $view . '.php';
		$this->loadPage($container,$data);
	}
	private function loadPage(string $container,$data){
		if (is_array($data)) {
			extract ($data);
		}
		include $this->header;
		include $container;
		include $this->footer;
	}
}
