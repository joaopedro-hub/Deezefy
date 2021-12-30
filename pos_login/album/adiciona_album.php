<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro Album </title>
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
              <li><a href="indexAL.php">Album</a></li>
            </ul>
          </div>
        </nav>

    <div class="row">
      <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Album</h3>
        <form action="crud/cria_album.php" method="POST">

          <div class="input-field col s12">
            <input type="text" name="titulo" id="titulo" required name="titulo">
            <label for="titulo">Título</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="anoLancamento" id="anoLancamento" required name="anoLancamento">
            <label for="anoLancamento">Ano de Lançamento</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="emailAr" id="emailAr" required name="emailAr">
            <label for="emailAr">Email do Artista</label>
          </div>

          

          <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
          <a href="indexAL.php" class="btn green">Lista de Albuns</a>
        </form>
      </div>
    </div>
        
      </body>
</html>