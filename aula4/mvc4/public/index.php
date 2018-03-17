<?php

//um unico arquivo php index vai funcionar gracas as rotas para navegar na applicacao inteira

//require das configuracoes e do autoload
require '../config/config.php';
require '../autoload.php';

//chama o controlador e executa ele
use Lib\FrontController\FrontController;
(new FrontController())->run();
