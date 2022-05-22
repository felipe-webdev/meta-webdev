<?php
  include "./conexao.php";
  if(isset($_POST["btn-entrar"])){
    $query = "SELECT email, senha FROM usuarios WHERE email = '".$_POST["email"]."' AND senha = '".$_POST["senha"]."';";
    $resultado = $mysqli->query($query)->fetch_all();
    // $email = $_POST["email"];
    // $senha = $_POST["senha"];
    if ($mysqli->affected_rows > 0) {
      header("Location: ./listagem.php");
      exit();
    } else {
      header("Location: ./index.php?status=falha");
      exit();
    }
  }
?>