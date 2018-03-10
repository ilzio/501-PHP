<?php
// prepare sirve para deixar a query pronta e definir os parametros separadamente

require 'conexao.php';

try {
    $dbPostgres->beginTransaction();

    //montamos array

    $dados = [
        'usuario' => 'antonio da silva',
        'senha' => '123'
      ];

//query SQL com parametros ainda nao definidos

    $sql = "INSERT INTO usuarios(usuario,senha) VALUES(:user,:pass)";

//prepara a query -> vai aguardar parametros
    $stmt = $dbPostgres->prepare($sql);

//definindo os parametros

    $params = [
      ':user' => $dados['usuario'],
      ':pass' =>$dados['senha']
      ];
//executando a query com os parametros ja declarados
    $stmt->execute($params);

    $dbPostgres->commit();

    echo "Funcionou!";

} catch (PDOException $e) { //erro e de tipo PDOException
    $dbPostgres->rollback();

    echo "Erro:" . $e->getMessage();
}
