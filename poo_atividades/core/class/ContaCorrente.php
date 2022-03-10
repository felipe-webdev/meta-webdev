<?php
class ContaCorrente extends ContaBancaria{
  protected $taxaSaque;

  function getTaxaSaque(){
    return $this->taxaSaque;
  }

  function setTaxaSaque($set){
    $this->taxaSaque = $set;
  }

  function sacar($quantia){
    $this->saldo = $this->saldo - ($quantia + $this->taxaSaque);
  }
}
?>