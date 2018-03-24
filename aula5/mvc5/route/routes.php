<?php

$rotas = [];

//usuario
$rotas['usuarios'] = 'UsuariosController@Index';
$rotas['usuarios/new'] = 'UsuariosController@New';
$rotas['usuarios/create'] = 'UsuariosController@Create';
$rotas['usuarios/edit'] = 'UsuariosController@Edit';
$rotas['usuarios/update'] = 'UsuariosController@Update';

//tarefas
$rotas['tarefas'] = 'TarefasController@Index';
$rotas['tarefas/new'] = 'TarefasController@New';
$rotas['tarefas/create'] = 'TarefasController@Create';
$rotas['tarefas/edit'] = 'TarefasController@Edit';
$rotas['tarefas/update'] = 'TarefasController@Update';

//login
$rotas['login/login'] = 'LoginController@Login';
$rotas['login/logginin'] = 'LoginController@Logginin';
$rotas['login/logout'] = 'LoginController@Logout';

return $rotas;
