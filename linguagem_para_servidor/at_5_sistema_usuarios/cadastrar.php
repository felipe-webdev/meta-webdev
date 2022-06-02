<?php
  include "./conexao.php";
  if(isset($_POST["btn-cadastrar"])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $celular = $_POST["celular"];
    $query = "INSERT INTO usuarios VALUES('', '$nome', '$email', '$senha', '$celular');";
    header("Location: ./index.php");
    exit();
  } else {
    header("Location: ./cadastro.php?status=cadastrar");
    exit();
  }
?>