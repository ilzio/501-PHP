<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require_once 'televisao.php';
    echo "<pre>";
    $t= new TV;

    // print_r($t);

    // $t->menu();
    // echo "<br>";
    $t->liga();
    // $t->menu();
    // $t->trocarCanal(rand(1, 33));
    // $t->menu();
    // $t->aumentaVolume();
    // $t->menu();

      ?>
  </body>
</html>
