<html>
  <head>
    <meta charset="UTF-8">
    <title>Qual é o Animal? (Sem JavaScript)</title>
    <style>
      body {
        font-family: sans-serif;
      }
      label {
        margin-right: 10px;
        font-size: 20px;
      }
      .opcao {
        width: 16px;
        height: 16px;
      }
      #enviar {
        margin-top: 20px;
        font-size: 16px;
      }
    </style>
  </head>
  <body>
    <h1>Qual é o Animal? Versão: Sem JavaScript</h1>
    <?php
      if (!isset($_POST["resposta"])) {
        echo ('<h2>Selecione uma opção e aperte em Próximo!</h2>'.
              '<form method="POST" action"">'.
                '<div>'.
                  '<input id="opcao_1" class="opcao" type="radio" name="resposta" value="Mamíferos">'.
                  '<label for="opcao_1">Mamíferos</label>'.
                  '<input id="opcao_2" class="opcao" type="radio" name="resposta" value="Aves">'.
                  '<label for="opcao_2">Aves</label>'.
                  '<input id="opcao_3" class="opcao" type="radio" name="resposta" value="Répteis">'.
                  '<label for="opcao_3">Répteis</label>'.
                '</div>'.
                '<div>'.
                '<input id="enviar" type="submit" name="btn" value="Próximo">'.
                '</div>'.
              '</form>'
        );
      } else if ($_POST["resposta"] == "Mamíferos") {
        echo ('<h2>Selecione uma opção e aperte em Próximo!</h2>'.
              '<form method="POST" action"">'.
                '<div>'.
                  '<input id="opcao_1" class="opcao" type="radio" name="resposta" value="Quadrúpedes">'.
                  '<label for="opcao_1">Quadrúpedes</label>'.
                  '<input id="opcao_2" class="opcao" type="radio" name="resposta" value="Bípedes">'.
                  '<label for="opcao_2">Bípedes</label>'.
                  '<input id="opcao_3" class="opcao" type="radio" name="resposta" value="Voadores">'.
                  '<label for="opcao_3">Voadores</label>'.
                  '<input id="opcao_4" class="opcao" type="radio" name="resposta" value="Aquáticos">'.
                  '<label for="opcao_4">Aquáticos</label>'.
                '</div>'.
                '<div>'.
                '<input id="enviar" type="submit" name="btn" value="Próximo">'.
                '</div>'.
              '</form>'
        );
      } else if ($_POST["resposta"] == "Aves") {
        echo ('<h2>Selecione uma opção e aperte em Próximo!</h2>'.
              '<form method="POST" action"">'.
                '<div>'.
                  '<input id="opcao_1" class="opcao" type="radio" name="resposta" value="Não Voadoras">'.
                  '<label for="opcao_1">Não Voadoras</label>'.
                  '<input id="opcao_2" class="opcao" type="radio" name="resposta" value="Nadadoras">'.
                  '<label for="opcao_2">Nadadoras</label>'.
                  '<input id="opcao_3" class="opcao" type="radio" name="resposta" value="De Rapina">'.
                  '<label for="opcao_3">De Rapina</label>'.
                '</div>'.
                '<div>'.
                '<input id="enviar" type="submit" name="btn" value="Próximo">'.
                '</div>'.
              '</form>'
        );
      } else if ($_POST["resposta"] == "Répteis") {
        echo ('<h2>Selecione uma opção e aperte em Próximo!</h2>'.
              '<form method="POST" action"">'.
                '<div>'.
                  '<input id="opcao_1" class="opcao" type="radio" name="resposta" value="Com Casco">'.
                  '<label for="opcao_1">Com Casco</label>'.
                  '<input id="opcao_2" class="opcao" type="radio" name="resposta" value="Carnívoro">'.
                  '<label for="opcao_2">Carnívoro</label>'.
                  '<input id="opcao_3" class="opcao" type="radio" name="resposta" value="Sem Patas">'.
                  '<label for="opcao_3">Sem Patas</label>'.
                '</div>'.
                '<div>'.
                '<input id="enviar" type="submit" name="btn" value="Próximo">'.
                '</div>'.
              '</form>'
        );
      } else if ($_POST["resposta"] == "Quadrúpedes") {
        echo ('<h2>Selecione uma opção e aperte em Próximo!</h2>'.
              '<form method="POST" action"">'.
                '<div>'.
                  '<input id="opcao_1" class="opcao" type="radio" name="resposta" value="Carnívoros">'.
                  '<label for="opcao_1">Carnívoros</label>'.
                  '<input id="opcao_2" class="opcao" type="radio" name="resposta" value="Herbívoros">'.
                  '<label for="opcao_2">Herbívoros</label>'.
                '</div>'.
                '<div>'.
                '<input id="enviar" type="submit" name="btn" value="Próximo">'.
                '</div>'.
              '</form>'
        );
      } else if ($_POST["resposta"] == "Bípedes") {
        echo ('<h2>Selecione uma opção e aperte em Próximo!</h2>'.
              '<form method="POST" action"">'.
                '<div>'.
                  '<input id="opcao_1" class="opcao" type="radio" name="resposta" value="Onívoros">'.
                  '<label for="opcao_1">Onívoros</label>'.
                  '<input id="opcao_2" class="opcao" type="radio" name="resposta" value="Frutívoros">'.
                  '<label for="opcao_2">Frutívoros</label>'.
                '</div>'.
                '<div>'.
                '<input id="enviar" type="submit" name="btn" value="Próximo">'.
                '</div>'.
              '</form>'
        );
      } else if ($_POST["resposta"] == "Não Voadoras") {
        echo ('<h2>Selecione uma opção e aperte em Próximo!</h2>'.
              '<form method="POST" action"">'.
                '<div>'.
                  '<input id="opcao_1" class="opcao" type="radio" name="resposta" value="Tropicais">'.
                  '<label for="opcao_1">Tropicais</label>'.
                  '<input id="opcao_2" class="opcao" type="radio" name="resposta" value="Polares">'.
                  '<label for="opcao_2">Polares</label>'.
                '</div>'.
                '<div>'.
                '<input id="enviar" type="submit" name="btn" value="Próximo">'.
                '</div>'.
              '</form>'
        );
      } else if ($_POST["resposta"] == "Carnívoros") {
        echo ('<h2>O Animal Selecionado Foi...</h2>'.
              '<p><b>LEÃO!</b></p>'
        );
      } else if ($_POST["resposta"] == "Herbívoros") {
        echo ('<h2>O Animal Selecionado Foi...</h2>'.
              '<p><b>CAVALO!</b></p>'
        );
      } else if ($_POST["resposta"] == "Onívoros") {
        echo ('<h2>O Animal Selecionado Foi...</h2>'.
              '<p><b>HOMEM!</b></p>'
        );
      } else if ($_POST["resposta"] == "Frutívoros") {
        echo ('<h2>O Animal Selecionado Foi...</h2>'.
              '<p><b>MACACO!</b></p>'
        );
      } else if ($_POST["resposta"] == "Voadores") {
        echo ('<h2>O Animal Selecionado Foi...</h2>'.
              '<p><b>MORCEGO!</b></p>'
        );
      } else if ($_POST["resposta"] == "Aquáticos") {
        echo ('<h2>O Animal Selecionado Foi...</h2>'.
              '<p><b>BALEIA!</b></p>'
        );
      } else if ($_POST["resposta"] == "Tropicais") {
        echo ('<h2>O Animal Selecionado Foi...</h2>'.
              '<p><b>AVESTRUZ!</b></p>'
        );
      } else if ($_POST["resposta"] == "Polares") {
        echo ('<h2>O Animal Selecionado Foi...</h2>'.
              '<p><b>PINGUIM!</b></p>'
        );
      } else if ($_POST["resposta"] == "Nadadoras") {
        echo ('<h2>O Animal Selecionado Foi...</h2>'.
              '<p><b>PATO!</b></p>'
        );
      } else if ($_POST["resposta"] == "De Rapina") {
        echo ('<h2>O Animal Selecionado Foi...</h2>'.
              '<p><b>ÁGUIA!</b></p>'
        );
      } else if ($_POST["resposta"] == "Com Casco") {
        echo ('<h2>O Animal Selecionado Foi...</h2>'.
              '<p><b>TARTARUGA!</b></p>'
        );
      } else if ($_POST["resposta"] == "Carnívoro") {
        echo ('<h2>O Animal Selecionado Foi...</h2>'.
              '<p><b>CROCODILO!</b></p>'
        );
      } else if ($_POST["resposta"] == "Sem Patas") {
        echo ('<h2>O Animal Selecionado Foi...</h2>'.
              '<p><b>COBRA!</b></p>'
        );
      }
    ?>
  </body>
</html>