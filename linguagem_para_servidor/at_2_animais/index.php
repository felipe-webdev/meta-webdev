<html>
  <head>
    <meta charset="UTF-8">
    <title>Qual é o Animal? (Com JavaScript)</title>
    <style>
      body {
        background-color: darkolivegreen;
      }
      a:link {
        display: inline-block;
        padding: 4px;
        border-bottom: 4px;
        border-bottom-style: solid;
        border-bottom-color: darkslategray;
        font-family: sans-serif;
        text-decoration: none;
        color: lightseagreen;
      }
      a:visited {
        color: lightseagreen;
      }
      a:hover {
        color: burlywood;
      }
      h1, h3, #enviar, button, select {
        font-family: sans-serif;
        color: azure;
      }
      #enviar, button, select {
        border-style: solid;
        border-width: 2px;
        border-color: darkgray;
        border-radius: 4px;
        background-color: darkslategray;
        font-size: 16px;
      }
      #enviar:hover, button:hover, select:hover {
        transition: 250ms;
        border-color: darkslategray;
        background-color: burlywood;
        color: darkslategray;
      }
      img {
        outline-style: solid;
        outline-width: 1px;
        outline-color: black;
      }
      #animal {
        margin-top: 20px;
        border-radius: 8px;
        padding: 4px;
        width: fit-content;
        background-color: darkslategray;
        font-family: sans-serif;
        font-size: 20px;
        text-align: center;
        color: azure;
        outline-style: solid;
        outline-width: 2px;
        outline-color: darkgray;
        box-shadow:  0 0 10px  rgba(0,0,0,0.6);
      }
      #animal:hover {
        transition: 250ms;
        background-color: burlywood;
        color: darkslategray;
        outline-style: solid;
        outline-width: 4px;
        outline-color: darkslategray;
      }
    </style>
  </head>
  <body>
    <a href="usando_apenas_php.php">Usar a Versão <b>Sem JavaScript</b></a>
    <a href="front_end.html">Usar a Versão <b>HTML e PHP Separados</b></a>
    <h1>Qual é o Animal? Versão: Com JavaScript</h1>
    <div id="filtros">
      <select name="filtro_1" id="filtro_1">
        <option value="1" descricao="Mamíferos">Mamíferos</option>
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
          if (valor == "Mamíferos") {
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
                                                            '<input type="submit" id="enviar" value="O animal é...">'
          }
        } else if (filtro == 3) {
          filtro_3 = document.querySelector("#filtro_3");
          valor = filtro_3.options[filtro_3.selectedIndex].getAttribute('descricao');
          document.getElementById('filtros').innerHTML = '<h3>Seu filtro foi: '+filtros.toString()+','+valor+'</h3>'+'<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">'+
                                                            '<input type="hidden" id="selecionados" name="selecionados" value="'+filtros.toString()+','+valor+'">'+
                                                          '<input type="submit" id="enviar" value="O animal é...">'
        }
        filtros.push(valor);
      }
    </script>
  </body>
</html>

<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["selecionados"] == "Mamíferos,Quadrúpedes,Carnívoros") {
      echo ('<div id="animal">O animal selecionado foi: <b>Leão</b><br/><img src="public/img/leao.jpg" alt"Imagem de um Leão"/></div>');
    } elseif ($_POST["selecionados"] == "Mamíferos,Quadrúpedes,Herbívoros") {
      echo ('<div id="animal">O animal selecionado foi: <b>Cavalo</b><br/><img src="public/img/cavalo.jpg" alt"Imagem de um Cavalo"/></div>');
    } elseif ($_POST["selecionados"] == "Mamíferos,Bípedes,Onívoros") {
      echo ('<div id="animal">O animal selecionado foi: <b>Homem</b><br/><img src="public/img/homem.jpg" alt"Imagem de um Homem"/></div>');
    } elseif ($_POST["selecionados"] == "Mamíferos,Bípedes,Frutívoros") {
      echo ('<div id="animal">O animal selecionado foi: <b>Macaco</b><br/><img src="public/img/macaco.jpg" alt"Imagem de um Macaco"/></div>');
    } elseif ($_POST["selecionados"] == "Mamíferos,Voadores") {
      echo ('<div id="animal">O animal selecionado foi: <b>Morcego</b><br/><img src="public/img/morcego.jpg" alt"Imagem de um Morcego"/></div>');
    } elseif ($_POST["selecionados"] == "Mamíferos,Aquáticos") {
      echo ('<div id="animal">O animal selecionado foi: <b>Baleia</b><br/><img src="public/img/baleia.jpg" alt"Imagem de uma Baleia"/></div>');
    } elseif ($_POST["selecionados"] == "Aves,Não Voadoras,Tropicais") {
      echo ('<div id="animal">O animal selecionado foi: <b>Avestruz</b><br/><img src="public/img/avestruz.jpg" alt"Imagem de um Avestruz"/></div>');
    } elseif ($_POST["selecionados"] == "Aves,Não Voadoras,Polares") {
      echo ('<div id="animal">O animal selecionado foi: <b>Pinguim</b><br/><img src="public/img/pinguim.jpg" alt"Imagem de um Pinguim"/></div>');
    } elseif ($_POST["selecionados"] == "Aves,Nadadoras") {
      echo ('<div id="animal">O animal selecionado foi: <b>Pato</b><br/><img src="public/img/pato.jpg" alt"Imagem de um Pato"/></div>');
    } elseif ($_POST["selecionados"] == "Aves,De Rapina") {
      echo ('<div id="animal">O animal selecionado foi: <b>Águia</b><br/><img src="public/img/aguia.jpg" alt"Imagem de uma Águia"/></div>');
    } elseif ($_POST["selecionados"] == "Répteis,Com Casco") {
      echo ('<div id="animal">O animal selecionado foi: <b>Tartaruga</b><br/><img src="public/img/tartaruga.jpg" alt"Imagem de uma Tartaruga"/></div>');
    } elseif ($_POST["selecionados"] == "Répteis,Carnívoro") {
      echo ('<div id="animal">O animal selecionado foi: <b>Crocodilo</b><br/><img src="public/img/crocodilo.jpg" alt"Imagem de um Crocodilo"/></div>');
    } elseif ($_POST["selecionados"] == "Répteis,Sem Patas") {
      echo ('<div id="animal">O animal selecionado foi: <b>Cobra</b><br/><img src="public/img/cobra.jpg" alt"Imagem de uma Cobra"/></div>');
    }
  }
?>