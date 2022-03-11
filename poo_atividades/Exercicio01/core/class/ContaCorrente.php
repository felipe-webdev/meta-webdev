<?php
class ContaCorrente extends ContaBancaria{
  protected $taxaSaque;

  function getTaxaSaque(){
    return $this->taxaSaque;
  }

  function setTaxaSaque($set){
    $this->taxaSaque = $set;
  }

  function depositar($quantia){
    $this->saldo = $this->saldo + $quantia;
  }

  function sacar($quantia){
    $this->saldo = $this->saldo - ($quantia + $this->taxaSaque);
  }
}
?>