<?php
abstract class Funcionario{
  protected $nome;
  protected $cpf;
  protected $data_nascimento;
  protected $salario;

  function getNome(){
    return $this->nome;
  }

  function setNome($set){
    $this->nome = $set;
  }

  function getCpf(){
    return $this->cpf;
  }

  function setCpf($set){
    $this->cpf = $set;
  }

  function getData_nascimento(){
    return $this->data_nascimento;
  }

  function setData_nascimento($set){
    $this->data_nascimento = $set;
  }

  function getSalario(){
    return $this->salario;
  }

  function setSalatio($set){
    $this->salario = $set;
  }

  abstract function bonificacao();
}
?>