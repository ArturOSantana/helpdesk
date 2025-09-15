<?php 
require_once "validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <title>App Help Desk - Consultar Chamado</title>

  <!-- Bootstrap -->
  <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
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
      <article class="card-consultar-chamado">
        <div class="card">
          <header class="card-header">
            <h2 class="h5 mb-0">Consulta de Chamado</h2>
          </header>
          
          <div class="card-body">
            
            <!-- Card de chamado -->
            <div class="card chamado-card">
              <div class="card-body">
                <h5 class="card-title">Título do chamado...</h5>
                <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                <p class="card-text">Descrição do chamado...</p>
              </div>
            </div>

            <div class="card chamado-card">
              <div class="card-body">
                <h5 class="card-title">Título do chamado...</h5>
                <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                <p class="card-text">Descrição do chamado...</p>
              </div>
            </div>

            <!-- Botão voltar -->
            <div class="row mt-5">
              <div class="col-6">
                <a href="home.php" class="btn btn-lg btn-warning btn-block btn-voltar">Voltar</a>
              </div>
            </div>

          </div>
        </div>
      </article>
    </section>
  </main>

  <!-- Rodapé -->
  <footer class="text-center mt-4 mb-3 text-muted">
    <small>&copy; <?php echo date("Y"); ?> App Help Desk</small>
  </footer>

</body>
</html>
