<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <title>App Help Desk - Login</title>

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
    </nav>
  </header>

  <!-- Conteúdo principal -->
  <main class="container">
    <section class="row">
      <article class="card-login">
        <div class="card">
          <header class="card-header">
            <h2 class="h5 mb-0">Login</h2>
          </header>
          <div class="card-body">
            <form action="valida_login.php" method="post">
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="E-mail" required>
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha" required>
              </div>

              <!-- Mensagens de erro -->
              <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>
                <p class="error-message">Usuário ou senha inválido(s)</p>
              <?php } ?>

              <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ ?>
                <p class="error-message">Por favor, faça login antes de acessar as páginas protegidas</p>
              <?php } ?>

              <!-- Botão -->
              <button class="btn btn-lg btn-info btn-block btn-login" type="submit">Entrar</button>
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
