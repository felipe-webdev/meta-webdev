<select class="form-select" name="cargo">
  <?php 
    require "Conexao.php";

    $sql = "SELECT * FROM cargos";
    if ($resultado = $mysqli->query($sql)) {
      if ($resultado->num_rows > 0) {
        while ($linha = $resultado->fetch_array()) {
          echo '<option value="'.$linha["id"].'">'.$linha["descricao"].'</option>';
        }
        $resultado->free();
      } else {
        echo '<option>Nenhum cargo encontrado</option>';
      }
    } else {
      echo "Oops! Algo deu errado. Tente novamente mais tarde.";
    }
    $mysqli->close();
  ?>
</select>