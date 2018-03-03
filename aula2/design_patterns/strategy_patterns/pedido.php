<?php
require_once 'fretestrategy.php';
class Pedido
{
    private $freteStrategy;
    private $totalPedido=0;
    public function __construct(int $preco, FreteStrategy $tipoFrete){
        $this->totalPedido = $preco;
        $this->freteStrategy = $tipoFrete;


    // if ($tipoFrete =="normal") {
    //   echo "Frete Normal";
    // } elseif ($tipoFrete =="expreso") {
    //   echo "Frete Normal";
    // } elseif ($tipoFrete =="turbo") {
    //   echo "Frete Turbo";
    // } else {
    //   echo "Frete Invalido";
    // }
  }
  public function calcularTotalPedido(){

    return $this->totalPedido += $this->freteStrategy->calcular();
  }

}

//instanciar Pedido dando como parametro criacao objeto Fretenormal

$pedido = new Pedido(10,new FreteNormal());
echo $pedido->calcularTotalPedido();
$pedido = new Pedido(10,new FreteExpresso());
echo $pedido->calcularTotalPedido();
$pedido = new Pedido(10,new FreteTurbo());
echo $pedido->calcularTotalPedido();
