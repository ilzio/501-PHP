<?php

namespace DAO\Conexao;

use PDO;

//criando singleton: permitir o acesso a somente uma instância de uma classe em particular

/**
 *
 */
class Conexao
{
    private static $user = "developer";
    private static $pass = "4linux";
    private static $dns = "pgsql:host=localhost;dbname=aula03";

    private static $instance = null;

    private function __construct()
    {
    }
    private function __clone()
    {
    }

    // se instancia e'nula faz conexao de banco, quando fazer conextao a instancia ja nao sera nula entao nao vai se conectar de novo

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new PDO(self::$dns, self::$user, self::$pass);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } return self::$instance;

        }
    }
