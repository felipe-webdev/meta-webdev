<?php
class Secretario extends Funcionario{
  protected $ramal;

  function getRamal(){
    return $this->ramal;
  }

  function setRamal($set){
    $this->ramal = $set;
  }

  function bonificacao(){
    $bonificacao = $this-> salario * 0.15 / 100;
    return $bonificacao;
  }
}
?>