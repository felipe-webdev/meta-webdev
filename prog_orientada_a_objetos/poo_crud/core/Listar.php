<?php
  // INCLUIR ARQUIVO DE CONEXÃO
  require_once "Conexao.php";
  
  // TENTATIVA DE SELECT
  $sql = "SELECT * FROM funcionarios";
  if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
      echo '<table class="table table-bordered table-striped">';
        echo "<thead>";
          echo "<tr>";
            echo "<th>#</th>";
            echo "<th>Nome</th>";
            echo "<th>Endereço</th>";
            echo "<th>Salário</th>";
            echo "<th>Ação</th>";
          echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row = $result->fetch_array()){
          echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['endereco'] . "</td>";
            echo "<td>" . $row['salario'] . "</td>";
            echo "<td>";
              echo '<a href="view/Visualizar.php?id='. $row['id'] .'" class="mr-3" title="Visualizar Registro" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
              echo '<a href="view/Atualizar.php?id='. $row['id'] .'" class="mr-3" title="Atualizar Registro" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
              echo '<a href="view/Deletar.php?id='. $row['id'] .'" title="Apagar Registro" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
            echo "</td>";
          echo "</tr>";
        }
        echo "</tbody>";
      echo "</table>";
      // LIBERAR RESULTADO
      $result->free();
    } else{
      echo '<div class="alert alert-danger"><em>Nenhum registro encontrado.</em></div>';
    }
  } else{
    echo "Oops! Algo deu errado. Tente novamente mais tarde.";
  }
  // FECHAR CONEXÃO
  $mysqli->close();
?>