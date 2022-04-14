<?php
  if (isset($_POST["btn_verificar"])) {
    $animal = ($_POST["animal"]);
    $categoria = ($_POST["categoria"]);
    $alimentacao = ($_POST["alimentacao"]);
    if ($animal == "Mamíferos") {
      if ($categoria == "Quadrúpedes") {
        if ($alimentacao == "Carnívoro") {
          echo ("LEÃO");
        }
      }
    }
  } else {
    header("Location: ../front_end.html");
    exit();
  }
?>