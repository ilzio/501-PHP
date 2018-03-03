<?php

interface FreteStrategy
{
    public function calcular();

}


class FreteNormal implements FreteStrategy
{
  public function calcular(){
    return 2;
  }


}
class FreteExpresso implements FreteStrategy
{
  public function calcular(){
    return 5;
  }

}
class FreteTurbo implements FreteStrategy
{
  public function calcular(){
    return 10;
  }

}
