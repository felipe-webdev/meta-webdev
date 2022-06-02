<?php
  include "./conexao.php";
  if(isset($_GET["btn-deletar"])) {
    $email = $_GET["email"];
    $query = "DELETE FROM usuarios WHERE email = '".$email."';";
    
    header("Location: ./index.php");
    exit();
  } else {
    header("Location: ./cadastro.php?status=cadastrar");
    exit();
  }
?>