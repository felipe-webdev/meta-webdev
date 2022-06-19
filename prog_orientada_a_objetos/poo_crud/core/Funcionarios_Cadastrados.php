<?php
  require_once "Conexao.php";
  $sql = "SELECT * FROM funcionarios";
  $result = $mysqli->query($sql);
  $quantidade = $result->num_rows;
  echo ("Cadastrados: $quantidade");
?>