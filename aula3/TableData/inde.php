<?php

require 'autoload.php';

use Model\Usuario\Usuario;
use DAO\UsuarioDAO\UsuarioDAO;

$lucas = new Usuario('lucas1','1234'); //cria objeto com dados

$dao= new UsuarioDAO(); //cria conexao e acepta funcao insert
// $dao->insert($lucas);
echo "<pre>";
//all e find sao estaticos para ser usados independentemente da instanciacao de objetos
//


// $joao= $dao->find(7);
// //tem que ser com o metodo get porque estamos tratando um objeto
// echo $joao->getUsuario();
// var_dump($dao->find(7));
// var_dump($dao ->find(12));
// var_dump($dao ->find(14));

// $dao->find(2);

// $lucasmarques = Usuario::find(22);
// var_dump($lucasmarques);
//
// $lucasmarques->setUsuario("lucascesarmarques");
// $lucasmarques->setSenha("123458");
// // var_dump($lucasmarques);
// //
// $lucasmarques->remove();
// var_dump($lucasmarques);
// // o objeto ainda existe, a informacao esta dentro dele mesmo se no banco ja a informacao foi apagada
// echo $lucasmarques->getid();
// $lucasmarques->save();
//
// var_dump($lucasmarques);
