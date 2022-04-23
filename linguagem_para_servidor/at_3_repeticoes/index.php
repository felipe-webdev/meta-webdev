<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AT3 Desafios de Repetição</title>
</head>
<body>
  <h2>AT3 Desafios de Repetição</h2>
  <?php
    echo (
      "<h3>Desafio 1</h3>"
      ."<p>Some os números de 1 a 100 e imprima o valor</p>"
    );
    $soma1a100 = 0;
    for ($i = 1; $i <= 100; $i++) {
      $soma1a100 = $soma1a100 + $i;
    }
    echo (
      "<p>A soma dos números de 1 a 100 é = $soma1a100 </p>"
    );
  ?>
  <?php
    echo (
      "<h3>Desafio 2</h3>"
      ."<p>Construa um Algoritmo que, para um grupo de 50 valores inteiros, determine:</p>"
      ."<ol>"
      ."<li>A soma dos números positivos</li>"
      ."<li>A quantidade de valores negativos</li>"
      ."</ol>"
    );
    $grupo50inteiros = [];
    $somadospositivos = 0;
    $quantidadenegativos = 0;
    for ($i = 1; $i <= 25; $i++) {
      array_push($grupo50inteiros, $i);
    }
    foreach ($grupo50inteiros as $valor) {
      $somadospositivos = $somadospositivos + $valor;
    }
    echo (
      "<p>A soma dos positivos é = $somadospositivos </p>"
    );
    for ($i = -1; $i >= -25; $i--) {
      array_push($grupo50inteiros, $i);
      $quantidadenegativos++;
    }
    echo (
      "<p>A quantidade de negativos é = $quantidadenegativos </p>"
    );
  ?>
  <?php
    echo (
      "<h3>Desafio 3</h3>"
      ."<p>Faça um algoritmo que imprima todos os números pares compreendidos entre 13 e 77. O algoritmo deve também calcular a soma destes valores e exibi-los</p>"
      ."<h4>Valores Pares:</h4>"
      .'<ul style="overflow: auto; width: 20%; height: 200px">'
    );
    $somadospares = 0;
    for ($i = 14; $i < 77; $i+=2) {
      $somadospares = $somadospares + $i;
      echo (
        "<li>Valor: $i</li>"
      );
    }
    echo (
      "</ul>"
      ."<p>A soma dos valores pares é = $somadospares </p>"
    );
  ?>
  <?php
    echo (
      "<h3>Desafio 4</h3>"
      ."<p>Escreva um algoritmo que calcule o produto dos inteiros ímpares de 1 a 15 e, então, exiba os resultados</p>"
      ."<h4>Resultados:</h4>"
      .'<ul style="overflow: auto; width: 20%; height: 200px">'
    );
    for ($i = 1; $i <= 15; $i+=2) {
      echo (
        "<li>Produto de $i x $i: ".($i * $i)."</li>"
      );
    }
    echo (
      "</ul>"
    );
  ?>
  <?php
    echo (
      "<h3>Desafio 5</h3>"
      ."<p>Faça um algoritmo que leia um número e imprima a sua tabela de multiplicação de 1 até 13</p>"
    );
  ?>
  <form action="" method="POST">
    <input type="number" name="numero" required>
    <input type="submit" name="ver_tabela" value="Ver Tabela">
  </form>
  <?php
    if (isset($_POST["ver_tabela"])) {
      $numero = $_POST["numero"];
      echo (
        '<table style="border: 1px solid; border-collapse: collapse;"><tr style="border: 1px solid;"><th style="border: 1px solid; padding: 2px">Operação</th><th style="border: 1px solid; padding: 2px">Resultado</th></tr>'
      );
      for ($i = 1; $i <= 13; $i++) {
        echo (
          '<tr style="border: 1px solid;"><td style="border: 1px solid; padding: 2px">'.$numero. " x ".$i.'</td><td style="border: 1px solid; padding: 2px">'.($numero * $i)."</td></tr>"
        );
      }
      echo (
        "</table>"
      );
    }
  ?>
  <?php
    echo (
      "<h3>Desafio 6</h3>"
      ."<p>Escreva um algoritmo que calcule os quadrados e cubos dos números de 0 a 10 e imprima os valores resultantes no formato de tabela</p>"
      .'<table style="border: 1px solid; border-collapse: collapse;"><tr style="border: 1px solid;"><th style="border: 1px solid; padding: 2px">Número</th><th style="border: 1px solid; padding: 2px">Quadrado</th><th style="border: 1px solid; padding: 2px">Cubo</th></tr>'
    );
    $i = 0;
    while ($i <= 10) {
      echo (
        '<tr style="border: 1px solid;"><td style="border: 1px solid; padding: 2px">'.$i.'</td><td style="border: 1px solid; padding: 2px">'.pow($i, 2).'</td><td style="border: 1px solid; padding: 2px">'.pow($i, 3)."</td></tr>"
      );
      $i++;
    }
    echo (
      "</table>"
    );
  ?>
</body>
</html>