<?php
//sempre e a primera coisa que tem no arquivo php, nao pode ter nada antes dele
namespace Site;

require_once 'model.php';
require_once 'view.php';

//declarando uns apelidos para os namespaces

use Model\Form as ModelForm;
use View\Form as ViewForm;

// a barra invertida chama os namespaces das classes e permite o PHP diferenciar os diferentes Form()

 $modelForm = new ModelForm();
 $modelForm = new ViewForm();
