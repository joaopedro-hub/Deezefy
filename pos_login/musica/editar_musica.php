<?php
  //incluindo a conexao
  include_once '../Projeto/conexao.php';
//select's
  if(isset($_GET['id'])):
    $idM = mysqli_escape_string($conexao,$_GET['id']);
    $sql = "SELECT id,nome,duracao,Artista_email FROM deezefy.musica m JOIN deezefy.grava g ON m.id = g.Musica_id
    WHERE m.id = '$idM';";
    //"SELECT id,nome,duracao FROM deezefy.musica WHERE id = '$idM'";

    $resultado = mysqli_query($conexao,$sql);
    $dados = mysqli_fetch_array($resultado);
  endif;
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Música </title>
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
              <li><a href="indexM.php">Artista</a></li>
              <li><a href="#">Listagem</a></li>
              <li><a href="#">Alterar</a></li>
            </ul>
          </div>
        </nav>

    <div class="row">
      <div class="col s12 m6 push-m3">
        <h3 class="light">Atualizar Música</h3>
        <form action="crud/atualiza_musica.php" method="POST">

          <div class="input-field col s12">
            <input type="text" name="id" id="id" value="<?php echo $dados['id'];?>">
            <label for="id">Código Música</label>
          </div>

          <div class="input-field col s12">
            <!--<input type="hidden" name="id" value="<?php echo $dados[0];?>"> -->
            <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
            <label for="nome">Nome</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="duracao" id="duracao" value="<?php echo $dados['duracao'];?>">
            <label for="duracao">Duracao</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="Artista_email" id="Artista_email" value="<?php echo $dados['Artista_email'];?>">
            <label for="Artista_email">Duracao</label>
          </div>

          

          <button type="submit" name="btn-editar" class="btn">Atualizar</button>
          <a href="indexM.php" class="btn green">Lista de Músicas</a>
        </form>
      </div>
    </div>
  </body>
</html>