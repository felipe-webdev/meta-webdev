<?php
abstract class ContaBancaria{
  protected $titular;
  protected $saldo;
  protected $numero;

  function getTitular(){
    return $this->titular;
  }

  function setTitular($set){
    $this->titular = $set;
  }

  function getSaldo(){
    return $this->saldo;
  }

  function setSaldo($set){
    $this->saldo = $set;
  }

  function getNumero(){
    return $this->numero;
  }

  function setNumero($set){
    $this->numero = $set;
  }

  abstract function sacar($quantia);

  abstract function depositar($quantia);
}
?>
