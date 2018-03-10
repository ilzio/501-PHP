<?php
// prepare sirve para deixar a query pronta e definir os parametros separadamente

//outro metodo ver apostila p. 177, que usa ?? no prepare

require 'conexao.php';

try {
    $dbMysql->beginTransaction();


    $dados = [
        'usuario' => 'joao silva',
        'senha' => '123'
      ];

//query SQL com parametros ainda nao definidos

  $sql = "INSERT INTO usuarios(usuario,senha) VALUES(:user,:pass)";

//prepara a query -> vai aguardar parametros
  $stmt = $dbMysql->prepare($sql);

//definindo os parametros com bindParam (tambem pode usar bindValue)

  $stmt->bindParam(":user",$dados['usuario']);
  $stmt->bindParam(":pass",$dados['senha']);
//executando a query com os parametros ja declarados

    $stmt->execute($params);

    $dbMysql->commit();

    echo "Funcionou!";




} catch (PDOException $e) { //erro e de tipo PDOException
    $dbPostgres->rollback();

    echo "Erro:" . $e->getMessage();
}
