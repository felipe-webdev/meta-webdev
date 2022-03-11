<?php
class Gerente extends Funcionario{
  protected $login;
  protected $senha;

  function getLogin(){
    return $this->login;
  }

  function setLogin($set){
    $this->login = $set;
  }

  function getSenha(){
    return $this->senha;
  }

  function setSenha($set){
    $this->senha = $set;
  }

  function bonificacao(){
    $bonificacao = $this-> salario * 0.25 / 100;
    return $bonificacao;
  }
}
?>