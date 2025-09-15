<?php 
require_once "validador_acesso.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

  <!-- CSS externo -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- Cabeçalho -->
  <header>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">
        <img src="logo.png" alt="Logo App Help Desk">
        App Help Desk
      </a>
       <ul class="navbar-nav">
        <li class="nav-item">
          <a href="logoff.php" class="nav-link">
          SAIR 
        </a>
    </nav>
  </header>

  <!-- Conteúdo principal -->
  <main class="container">
    <section class="row">
      <article class="card-home">
        <div class="card">
          <header class="card-header">
            <h2>Menu</h2>
          </header>
          <div class="card-body">
            <div class="row text-center">
              <div class="col-6 menu-option">
                <a href="abrir_chamado.php" aria-label="Abrir Chamado">
                  <img src="formulario_abrir_chamado.png" alt="Abrir Chamado">
                </a>
              </div>
              <div class="col-6 menu-option">
                <a href="consultar_chamado.php" aria-label="Consultar Chamado">
                  <img src="formulario_consultar_chamado.png" alt="Consultar Chamado">
                </a>
              </div>
            </div>
          </div>
        </div>
      </article>
    </section>
  </main>

  <!-- Rodapé -->
  <footer>
    <small>&copy; <?php echo date("Y"); ?> App Help Desk</small>
  </footer>

</body>
</html>
