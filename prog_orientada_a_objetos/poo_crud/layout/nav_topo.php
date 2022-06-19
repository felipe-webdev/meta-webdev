<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo($locais['Painel']); ?>">
      <!-- <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top"> -->
      RH Xpert
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo(htmlspecialchars($_SESSION['usuario'])); ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php echo($locais['Perfil']); ?>">Perfil</a></li>
            <li><a class="dropdown-item" href="<?php echo($locais['Atualizar_Cadastro']); ?>">Atualizar Cadastro</a></li>
            <li><a class="dropdown-item" href="<?php echo($locais['Alterar_Senha']); ?>">Alterar Senha</a></li>
            <li><a class="dropdown-item" href="<?php echo($locais['Sair']); ?>">Sair</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>