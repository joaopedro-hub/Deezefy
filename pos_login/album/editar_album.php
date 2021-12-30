<?php
  //incluindo a conexao
  include_once '../Projeto/conexao.php';
//select's
  if(isset($_GET['id'])):
    $idAL = mysqli_escape_string($conexao,$_GET['id']);
    $sql = "SELECT id,titulo,ano_de_lancamento,Artista_email FROM deezefy.album WHERE id = '$idAL'";

    $resultado = mysqli_query($conexao,$sql);
    $dados = mysqli_fetch_array($resultado);
  endif;
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Album </title>
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
        <form action="crud/atualiza_album.php" method="POST">
          <div class="input-field col s12">
            <input type="hidden" name="id" value="<?php echo $dados[0];?>">
            <input type="text" name="titulo" id="titulo" value="<?php echo $dados['titulo'];?>">
            <label for="titulo">Título</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="ano_de_lancamento" id="ano_de_lancamento"  value="<?php echo $dados['ano_de_lancamento'];?>">
            <label for="ano_de_lancamento">Ano de lançamento</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="Artista_email" id="Artista_email" value="<?php echo $dados['Artista_email'];?>">
            <label for="Artista_email">Email do Artista</label>
          </div>

         

          <button type="submit" name="btn-editar" class="btn">Atualizar</button>
          <a href="indexAL.php" class="btn green">Lista de Albuns</a>
        </form>
      </div>
    </div>
  </body>
</html>