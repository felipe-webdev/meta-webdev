<?php 
  require_once "Conexao.php";

  $sql = "SELECT funcionarios.id, funcionarios.nome, funcionarios.endereco, funcionarios.salario, cargos.descricao 
  FROM funcionarios
  INNER JOIN cargos ON funcionarios.cargo_id = cargos.id";

  if ($resultado = $mysqli->query($sql)) {
    if ($resultado->num_rows > 0) {
      echo '<table class="table table-bordered table-striped">';
        echo "<thead>";
          echo "<tr>";
            echo "<th>Código</th>";
            echo "<th>Nome</th>";
            echo "<th>Cargo</th>";
            echo "<th>Ação</th>";
          echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($linha = $resultado->fetch_array()) {
          echo "<tr>";
            echo "<td>" . $linha['id'] . "</td>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td>" . $linha['descricao'] . "</td>";
            echo "<td>";
              echo '<a href="Visualizar.php?id='. $linha['id'] .'" class="mr-3" title="Visualizar Registro" data-toggle="tooltip"><span style="padding: 0 8px" class="fa fa-eye"></span></a>';
              echo '<a href="Atualizar.php?id='. $linha['id'] .'" class="mr-3" title="Atualizar Registro" data-toggle="tooltip"><span style="padding: 0 8px" class="fa fa-pencil"></span></a>';
              echo '<a href="Deletar.php?id='. $linha['id'] .'" title="Apagar Registro" data-toggle="tooltip"><span style="padding: 0 8px" class="fa fa-trash"></span></a>';
            echo "</td>";
          echo "</tr>";
        }
        echo "</tbody>";
      echo "</table>";
      /* LIBERAR RESULTADO */
      $resultado->free();
    } else {
      echo '<div class="alert alert-danger"><em>Nenhum registro encontrado.</em></div>';
    }
  } else {
    echo "Oops! Algo deu errado. Tente novamente mais tarde.";
  }
  /* ENCERRAR A CONEXÃO */
  $mysqli->close();
?>