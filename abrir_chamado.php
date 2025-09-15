<?php 
require_once "validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <title>App Help Desk - Abrir Chamado</title>

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
      <article class="card-abrir-chamado">
        <div class="card">
          <header class="card-header">
            <h2 class="h5 mb-0">Abertura de Chamado</h2>
          </header>
          <div class="card-body">
            <form action="registra_chamado.php" method="post">
              
              <!-- Título -->
              <div class="form-group">
                <label for="titulo">Título</label>
                <input id="titulo" name="titulo" type="text" class="form-control" placeholder="Título" required>
              </div>
              
              <!-- Categoria -->
              <div class="form-group">
                <label for="categoria">Categoria</label>
                <select id="categoria" name="categoria" class="form-control" required>
                  <option value="">Selecione</option>
                  <option value="usuario">Criação Usuário</option>
                  <option value="impressora">Impressora</option>
                  <option value="hardware">Hardware</option>
                  <option value="software">Software</option>
                  <option value="rede">Rede</option>
                </select>
              </div>
              
              <!-- Descrição -->
              <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea id="descricao" name="descricao" class="form-control" rows="3" required></textarea>
              </div>

              <!-- Botões -->
              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-lg btn-warning btn-block btn-voltar">Voltar</a>
                </div>
                <div class="col-6">
                  <button class="btn btn-lg btn-info btn-block btn-abrir" type="submit">Abrir</button>
                </div>
              </div>
            </form>
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
