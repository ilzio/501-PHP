<?php

require 'conexao.php';

//adicionar campos na tabela

      // $sql = "INSERT INTO usuarios (usuario,senha) VALUES('lucasm','123')";

// //UPDATE
      // $sql1= "UPDATE usuarios SET usuario = 'joao' WHERE id = '1'";

//DELETE

      // $sql2="DELETE FROM usuarios WHERE id = '1'";

      // $dbPostgres->exec($sql);


//PEGAR INFORMACAO DO BANCO DE DADOS

      // $sql = "SELECT * FROM usuarios";
      //
      // $result=$dbPostgres->query($sql);
      //
      // $usuarios=$result->fetchAll(PDO::FETCH_ASSOC); //retorna array associativo
      //
      // // print_r($result);
      // echo "<pre>";
      // print_r($usuarios);


//TRANSACAO -> se houver erro na escrita faz um rollback
//cuidado : se apenas so um da erro faz rollback de tudo: tudo dentro do try tem que funcionar

try {
    $dbPostgres->beginTransaction();
    $sql = "INSERT INTO usuarios (usuario,senha) VALUES('lucasm','123')";
    $dbPostgres->exec($sql);


    $dbPostgres->commit();
} catch (PDOException $e) { //erro e de tipo PDOException
    $dbPostgres->rollback();

    echo "Erro:" . $e->getMessage();
}
