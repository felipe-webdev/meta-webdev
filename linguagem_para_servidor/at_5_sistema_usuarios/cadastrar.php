<?php
  if(isset($_POST["btn-cadastrar"])) {
    header("Location: ./index.php");
    exit();
  } else {
    header("Location: ./cadastro.php?status=cadastrar");
    exit();
  }
?>