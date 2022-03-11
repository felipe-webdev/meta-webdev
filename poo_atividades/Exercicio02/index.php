<html>
  <head>

  </head>
  <body>
    <?php
      include "/core/class/Secretario.php";
      include "/core/class/Gerente.php";
  
      $secretario_1 = new Secretario();
      $secretario_1->setNome("Felipe Fernandes");
      $secretario_1->setCpf(12345678911);
      $secretario_1->setData_nascimento("12/12/1999");
      $secretario_1->setSalatio(22000);
      $secretario_1->setRamal(001);
  
      $gerente_1 = new Gerente();
      $gerente_1->setNome("Fulano Ferreira");
      $gerente_1->setCpf(98765432133);
      $gerente_1->setData_nascimento("01/01/2000");
      $gerente_1->setSalatio(11000);
      $gerente_1->setLogin("gerencia@mail.com");
      $gerente_1->setSenha("senhaForte");
  
      echo ($secretario_1->bonificacao());
      echo ($gerente_1->bonificacao());
    ?>
  </body>
</html>