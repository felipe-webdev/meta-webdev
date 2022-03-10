<?php
// QUESTÃO 01

  $numero = 77;

  $anterior = $numero - 1;

  echo ("<h3 style=''>Questão 01... O valor anterior é:</h3><br>".$anterior."<br>");

// QUESTÃO 02
// QUESTÃO 03
// QUESTÃO 04
$eleitores = 9999;
$votosBrancos = 111;
$votosNulos = 222;
$votosValidos = 333;

// QUESTÃO 05
// QUESTÃO 06
// QUESTÃO 07
// QUESTÃO 08
// QUESTÃO 09
  $n1 = 10;

  $n2 = 11;

  $n3 = 12;

  $media = (($n1 * 2) + ($n2 * 3) + ($n3 * 5)) / 10;

  echo ("<h3>O resultado da questão 09 é:</h3><br> ".$media."<br>");

// QUESTÃO 10

?>

<?php

class MinhaClasse {
  // defining function
    function porcentagemDe($num_quantidade, $num_total) {//ISSO PEGA A PORCENTAGEM DE UM NUMERO EM RELAÇÃO A OUTRO
    $calculo1 = $num_quantidade / $num_total;
    $calculo2 = $calculo1 * 100;
    $calculo = number_format($calculo2, 0);
    return $calculo;
  }
}

// PARA PEGAR UMA PORCENTAGEM DE UM NUMERO EU DIVIDO ELE POR 100 DEPOIS MULTIPLICO PELA PORCENTAGEM QUE DESEJO OBTER

$objeto = new MinhaClasse();
$quantidade = readline('Escreva a quantidade: ');
$total = readline('Escreva o total: ');
echo ("A porcentagem de ".$quantidade." em relação à ".$total." é de: ".$objeto -> porcentagemDe($quantidade, $total)."%<br/>");

?>

<?php

// $t = date("H");

// if ($t < "20") {
//   echo "Have a good day!";
// }

// $lerLinha = readline('Escreva: ');
// echo ($lerLinha)

// fscanf(STDIN, "%d %d", $a, $b);
// echo "The sum of " . $a . " and "
//   . $b . " is " . ($a + $b);

?>