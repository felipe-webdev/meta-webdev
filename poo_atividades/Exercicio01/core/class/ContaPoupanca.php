<?php
include_once "ContaBancaria.php";
class ContaPoupanca extends ContaBancaria{
  protected $jurosDeposito;

  function getJurosDeposito(){
    return $this->jurosDeposito;
  }

  function setJurosDeposito($set){
    $this->jurosDeposito = $set;
  }

  function depositar($quantia){
    $this->saldo = $this->saldo + ($quantia + $this->jurosDeposito);
  }

  function sacar($quantia){
    $this->saldo = $this->saldo - $quantia;
  }
}
?>