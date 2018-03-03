<?php

require_once 'autoload.php';

// use Escola;

//esses require funcionan mas vao atrapalhar, usar namespaces e'melhor

// require_once 'aluno/aluno.php';
// require_once 'curso/curso.php';
// require_once 'matricula/matricula.php';
// require_once 'turma/turma.php';

use Escola\Aluno\Aluno;
use Escola\Curso\Curso;
use Escola\Turma\Turma;
use Escola\Matricula\Matricula;

echo "<pre>";

$lucas= new Aluno("lucas", "lucas@lucas.com");
$php = new Curso("php", 40);
$turma = new Turma($php, "sabado");
$matricula=new Matricula($lucas, $turma);
