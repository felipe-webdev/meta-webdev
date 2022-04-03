<html>
  <head>
  </head>
  <body>
    <?php
      include "core/class/ContaCorrente.php";
      include "core/class/ContaPoupanca.php";

      $conta_corrente1 = new ContaCorrente();
      $conta_corrente1->setTitular("Felipe Fernandes");
      $conta_corrente1->setNumero(0001);
      $conta_corrente1->setSaldo(15000);
      $conta_corrente1->setTaxaSaque(22);

      $conta_poupanca1 = new ContaPoupanca();
      $conta_poupanca1->setTitular("Fulano Ferreira");
      $conta_poupanca1->setNumero(0001);
      $conta_poupanca1->setSaldo(0);
      $conta_poupanca1->setJurosDeposito(22);

      $conta_corrente1->depositar(111);
      $conta_poupanca1->depositar(222);

      echo ("O titular da conta poupança Nº".$conta_poupanca1->getNumero()." É: ".$conta_poupanca1->getTitular()."<br/>");
    ?>
  </body>
</html>