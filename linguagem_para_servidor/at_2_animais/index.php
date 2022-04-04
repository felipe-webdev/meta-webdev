<html>
  <head>
    <meta charset="UTF-8">
    <title>Qual é o Animal?</title>
  </head>
  <body>
    <h2>Qual é o Animal?</h2>
    <div id="filtros">
      <select name="filtro_1" id="filtro_1">
        <option value="1" descricao="Mamífero">Mamífero</option>
        <option value="2" descricao="Aves">Aves</option>
        <option value="3" descricao="Répteis">Répteis</option>
      </select>
      <button type="button" onclick="arrayFiltro(1);">Próximo</button>
    </div>
    <script>
      document.addEventListener('DOMContentLoaded',
        function () {
          filtros = [];
        }
      )
      function arrayFiltro(filtro) {
        if (filtro == 1) {
          filtro_1 = document.querySelector("#filtro_1");
          valor = filtro_1.options[filtro_1.selectedIndex].getAttribute('descricao');
          if (valor == "Mamífero") {
            document.getElementById('filtros').innerHTML = '<select name="filtro_2" id="filtro_2">'+
                                                              '<option value="1" descricao="Quadrúpedes">Quadrúpedes</option>'+
                                                              '<option value="2" descricao="Bípedes">Bípedes</option>'+
                                                              '<option value="3" descricao="Voadores">Voadores</option>'+
                                                              '<option value="4" descricao="Aquáticos">Aquáticos</option>'+
                                                            '</select>'+
                                                            '<button type="button" onclick="arrayFiltro(2);">Próximo</button>'
          } else if (valor == "Aves") {
            document.getElementById('filtros').innerHTML = '<select name="filtro_2" id="filtro_2">'+
                                                              '<option value="1" descricao="Não Voadoras">Não Voadoras</option>'+
                                                              '<option value="2" descricao="Nadadoras">Nadadoras</option>'+
                                                              '<option value="3" descricao="De Rapina">De Rapina</option>'+
                                                            '</select>'+
                                                            '<button type="button" onclick="arrayFiltro(2);">Próximo</button>'
          } else if (valor == "Répteis") {
            document.getElementById('filtros').innerHTML = '<select name="filtro_2" id="filtro_2">'+
                                                              '<option value="1" descricao="Com Casco">Com Casco</option>'+
                                                              '<option value="2" descricao="Carnívoro">Carnívoro</option>'+
                                                              '<option value="3" descricao="Sem Patas">Sem Patas</option>'+
                                                            '</select>'+
                                                            '<button type="button" onclick="arrayFiltro(2);">Próximo</button>'
          }
        } else if (filtro == 2) {
          filtro_2 = document.querySelector("#filtro_2");
          valor = filtro_2.options[filtro_2.selectedIndex].getAttribute('descricao');
          if (valor == "Quadrúpedes") {
            document.getElementById('filtros').innerHTML = '<select name="filtro_3" id="filtro_3">'+
                                                              '<option value="1" descricao="Carnívoros">Carnívoros</option>'+
                                                              '<option value="2" descricao="Herbívoros">Herbívoros</option>'+
                                                            '</select>'+
                                                            '<button type="button" onclick="arrayFiltro(3);">Próximo</button>'
          }
          if (valor == "Bípedes") {
            document.getElementById('filtros').innerHTML = '<select name="filtro_3" id="filtro_3">'+
                                                              '<option value="1" descricao="Onívoros">Onívoros</option>'+
                                                              '<option value="2" descricao="Frutívoros">Frutívoros</option>'+
                                                            '</select>'+
                                                            '<button type="button" onclick="arrayFiltro(3);">Próximo</button>'
          }
          if (valor == "Não Voadoras") {
            document.getElementById('filtros').innerHTML = '<select name="filtro_3" id="filtro_3">'+
                                                              '<option value="1" descricao="Tropicais">Tropicais</option>'+
                                                              '<option value="2" descricao="Polares">Polares</option>'+
                                                            '</select>'+
                                                            '<button type="button" onclick="arrayFiltro(3);">Próximo</button>'
          }
          if (valor == "Voadores" || valor == "Aquáticos" || valor == "Nadadoras" || valor == "De Rapina" || valor == "Com Casco" || valor == "Carnívoro" || valor == "Sem Patas") {
            document.getElementById('filtros').innerHTML = '<h3>Seu filtro foi: '+filtros.toString()+','+valor+'</h3>'+'<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">'+
                                                              '<input type="hidden" id="selecionados" name="selecionados" value="'+filtros.toString()+','+valor+'">'+
                                                            '<input type="submit" class="btn btn-primary" value="O animal é...">'
          }
        } else if (filtro == 3) {
          filtro_3 = document.querySelector("#filtro_3");
          valor = filtro_3.options[filtro_3.selectedIndex].getAttribute('descricao');
          document.getElementById('filtros').innerHTML = '<h3>Seu filtro foi: '+filtros.toString()+','+valor+'</h3>'+'<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">'+
                                                            '<input type="hidden" id="selecionados" name="selecionados" value="'+filtros.toString()+','+valor+'">'+
                                                          '<input type="submit" class="btn btn-primary" value="O animal é...">'
        }
        filtros.push(valor);
      }
    </script>
  </body>
</html>

<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["selecionados"] == "Mamífero,Quadrúpedes,Carnívoros") {
      echo ("O animal selecionado foi: <b>Leão</b>");
    } elseif ($_POST["selecionados"] == "Mamífero,Quadrúpedes,Herbívoros") {
      echo ("O animal selecionado foi: <b>Cavalo</b>");
    } elseif ($_POST["selecionados"] == "Mamífero,Bípedes,Onívoros") {
      echo ("O animal selecionado foi: <b>Homem</b>");
    } elseif ($_POST["selecionados"] == "Mamífero,Bípedes,Frutívoros") {
      echo ("O animal selecionado foi: <b>Macaco</b>");
    } elseif ($_POST["selecionados"] == "Mamífero,Voadores") {
      echo ("O animal selecionado foi: <b>Morcego</b>");
    } elseif ($_POST["selecionados"] == "Mamífero,Aquáticos") {
      echo ("O animal selecionado foi: <b>Baleia</b>");
    } elseif ($_POST["selecionados"] == "Aves,Não Voadoras,Tropicais") {
      echo ("O animal selecionado foi: <b>Avestruz</b>");
    } elseif ($_POST["selecionados"] == "Aves,Não Voadoras,Polares") {
      echo ("O animal selecionado foi: <b>Pinguin</b>");
    } elseif ($_POST["selecionados"] == "Aves,Nadadoras") {
      echo ("O animal selecionado foi: <b>Pato</b>");
    } elseif ($_POST["selecionados"] == "Aves,De Rapina") {
      echo ("O animal selecionado foi: <b>Águia</b>");
    } elseif ($_POST["selecionados"] == "Répteis,Com Casco") {
      echo ("O animal selecionado foi: <b>Tartaruga</b>");
    } elseif ($_POST["selecionados"] == "Répteis,Carnívoro") {
      echo ("O animal selecionado foi: <b>Crocodilo</b>");
    } elseif ($_POST["selecionados"] == "Répteis,Sem Patas") {
      echo ("O animal selecionado foi: <b>Cobra</b>");
    }
  }
?>