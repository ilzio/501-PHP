<?php

require 'conexao.php';

//adicionar campos na tabela

      // $sql = "INSERT INTO usuarios (usuario,senha) VALUES('lucasm','123')";

// //UPDATE
      // $sql1= "UPDATE usuarios SET usuario = 'joao' WHERE id = '1'";

//DELETE

      // $sql2="DELETE FROM usuarios WHERE id = '1'";

      // $dbMysql->exec($sql);

//PEGAR INFORMACAO DO BANCO DE DADOS

      // $sql = "SELECT * FROM usuarios";
      //
      // $result=$dbMysql->query($sql);
      //
      // $usuarios=$result->fetchAll(PDO::FETCH_ASSOC); //retorna array associativo
      //
      // // print_r($result);
      // echo "<pre>";
      // print_r($result);

//TRANSACAO -> se houver erro na escrita faz um rollback

try {
    $dbMysql->beginTransaction();
    $sql = "INSERT INTO usuarios (usuario,senha) VALUES('lucasm','123')";
    $dbMysql->exec($sql);


    $dbMysql->commit();
} catch (PDOException $e) { //erro e de tipo PDOException
    $dbMysql->rollback();

    echo "Erro:" . $e->getMessage();
}
