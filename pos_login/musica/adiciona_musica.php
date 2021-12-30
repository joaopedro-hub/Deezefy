<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro Música </title>
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
              <li><a href="indexM.php">Música</a></li>
            </ul>
          </div>
        </nav>

    <div class="row">
      <div class="col s12 m6 push-m3">
        <h3 class="light">Nova Música</h3>
        <form action="crud/cria_musica.php" method="POST">

          <div class="input-field col s12">
            <input type="text" name="codM" id="codM" required name="codM">
            <label for="codM">Código da Música</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="nomeM" id="nomeM" required name="nomeM">
            <label for="nomeM">Nome da Música</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="duracao" id="duracao" required name="duracao">
            <label for="duracao">Duração</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="emailAr" id="emailAr" required name="emailAr">
            <label for="emailAr">Email do Artista</label>
          </div>

          

          <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
          <a href="indexM.php" class="btn green">Lista de Músicas</a>
        </form>
      </div>
    </div>
        
      </body>
</html>