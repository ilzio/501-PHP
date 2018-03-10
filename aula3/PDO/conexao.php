<?php

//PDO permite abstrair conexao com banco de dados, permite usar diferentes bancos de dados sem ter que alterar as strings de conexao, a menos que tenha uma query especifica


 //estrutura: (data source name;user;password)
$dbMysql = new PDO("mysql:host=localhost;dbname=aula03", "developer", "4linux123");

$dbPostgres = new PDO("pgsql:host=localhost;dbname=aula03", "developer", "4linux");

$dbMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbPostgres->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// var_dump($dbMysql);
// var_dump($dbPostgres);
