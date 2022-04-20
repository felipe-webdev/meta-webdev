<?php
  if (isset($_POST["btn_verificar"])) {
    $animal = ($_POST["animal"]);
    $categoria = ($_POST["categoria"]);
    $subcategoria = ($_POST["subcategoria"]);
    $alimentacao = ($_POST["alimentacao"]);
    if ($animal == "Mamíferos") {
      if ($subcategoria == "") {
        if ($categoria == "Quadrúpedes") {
          switch ($alimentacao) {
            case "Carnívoro":
              echo ("LEÃO");
              break;
            case "Herbívoro":
              echo ("CAVALO");
              break;
            default:
              echo ("ANIMAL NÃO ENCONTRADO: Os mamíferos quadrúpedes são carnívoros ou herbívoros!");
          }
        } else if ($categoria == "Bípedes") {
          switch ($alimentacao) {
            case "Onívoro":
              echo ("HOMEM");
              break;
            case "Frutívoro":
              echo ("MACACO");
              break;
            default:
              echo ("ANIMAL NÃO ENCONTRADO: Os mamíferos bípedes são onívoros ou frutívoros!");
          }
        } else {
          switch ($categoria) {
            case "Voador":
              echo ("MORCEGO");
              break;
            case "Aquático":
              echo ("BALEIA");
              break;
            default:
              echo ("ANIMAL NÃO ENCONTRADO: Os mamíferos são quadrúpedes, bípedes, voadores ou aquáticos!");
          }
        }
      } else {
        echo ("ANIMAL NÃO ENCONTRADO: Somente as aves têm sub-categoria!");
      }
    } else if ($animal == "Aves") {
      if ($alimentacao == "") {
        if ($categoria == "Não Voadora") {
          switch ($subcategoria) {
            case "Tropical":
              echo ("AVESTRUZ");
              break;
            case "Polar":
              echo ("PINGUIM");
              break;
            default:
              echo ("ANIMAL NÃO ENCONTRADO: Informe a sub-categoria das aves não-voadoras!");
          }
        } else {
          if ($subcategoria == "") {
            switch ($categoria) {
              case "Nadadora":
                echo ("PATO");
                break;
              case "De Rapina":
                echo ("ÁGUIA");
                break;
              default:
                echo ("ANIMAL NÃO ENCONTRADO: As aves são não-voadoras, nadadoras ou de-rapina!");
            }
          } else {
            echo ("ANIMAL NÃO ENCONTRADO: Somente as aves não-voadoras têm sub-categoria!");
          }

        }
      } else {
        echo ("ANIMAL NÃO ENCONTRADO: Não informe a alimentação das aves!");
      }
    } else if ($animal == "Répteis") {
      if ($subcategoria == "") {
        if ($alimentacao == "Carnívoro") {
          echo ("CROCODILO");
        } else if ($alimentacao == "") {
          switch ($categoria) {
            case "Com Casco":
              echo ("TARTARUGA");
              break;
            case "Sem Patas":
              echo ("COBRA");
              break;
            default:
              echo ("ANIMAL NÃO ENCONTRADO: Os répteis são com-casco ou sem-patas!");
          }
        } else {
          echo ("ANIMAL NÃO ENCONTRADO: Informe a alimentação do réptil apenas se ele for carnívoro!");
        }
      } else {
        echo ("ANIMAL NÃO ENCONTRADO: Somente as aves têm sub-categoria!");
      }
    }
  } else {
    header("Location: ../front_end.html");
    exit();
  }
?>