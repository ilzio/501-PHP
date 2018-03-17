<?php

namespace DAO;

use DAO\Conexao;
use PDO;

class PostsDAO
{
private $con = NULL;

public function __construct()
{
  $this->con = Conexao::getInstance();
}

public function all(){
//query
  $sql = "SELECT * FROM posts";
  $stmt = $this->con->query($sql);
  $stmt->execute();

  $result=$stmt->fetchAll(PDO::FETCH_ASSOC);

  return $result;
}

}
