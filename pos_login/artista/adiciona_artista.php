<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro Artista </title>
        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      </head>

      <body>
      <nav>
          <div class="nav-wrapper">
            <a href="#" class="brand-logo">Menu</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="#">Home</a></li>
              <li><a href="indexA.php">Artista</a></li>
            </ul>
          </div>
        </nav>

    <div class="row">
      <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Artista</h3>
        <form action="crud/cria_artista.php" method="POST">
          <div class="input-field col s12">
            <input type="text" name="email" id="email" required name="email">
            <label for="email">Email</label>
          </div>

          <div class="input-field col s12">
            <input title="Senha Criptografada" type="password" name="senha" id="senha" required name="senha">
            <label for="senha">Senha</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="nomeArtistico" id="nomeArtistico" required name="nomeArtistico">
            <label for="nomeArtistico">Nome Artístico</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="biografia" id="biografia" required name="biografia">
            <label for="biografia">Biografia</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="ano" id="ano" required name="ano">
            <label for="ano">Ano Formação</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="data" id="data" placeholder="DD-MM-YYYY" required pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" required name="data">
            <label for="data">Data de Nascimento</label>
          </div>

          <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
          <a href="indexA.php" class="btn green">Lista de Artistas</a>
        </form>
      </div>
    </div>
        
      </body>
</html>