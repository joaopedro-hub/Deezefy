<?php
  //incluindo a conexao
  include_once '../Projeto/conexao.php';
//select's
  if(isset($_GET['id'])):
    $emailBD = mysqli_escape_string($conexao,$_GET['id']);
    $sql = "SELECT email,senha,data_de_nascimento,idade,primeiro_nome,sobrenome FROM deezefy.usuario JOIN deezefy.ouvinte USING(email)
    WHERE email = '$emailBD'";
    $resultado = mysqli_query($conexao,$sql);
    $dados = mysqli_fetch_array($resultado);
  endif;
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Ouvinte </title>
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
              <li><a href="indexO.php">Artista</a></li>
              <li><a href="#">Listagem</a></li>
              <li><a href="#">Alterar</a></li>
            </ul>
          </div>
        </nav>

    <div class="row">
      <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Artista</h3>
        <form action="crud/atualiza_ouvinte.php" method="POST">
          <div class="input-field col s12">

            <input type="hidden" name="id" value="<?php echo $dados[0];?>">
            <input type="text" name="email" id="email" value="<?php echo $dados['email'];?>">
            <label for="email">Email</label>
          </div>

          <div class="input-field col s12">
            <input type="password" title="Senha Criptografada" name="senha" id="senha" value="<?php echo $dados['senha'];?>">
            <label for="senha">Senha</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="data" id="data" placeholder="DD-MM-YYYY" required pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" value="<?php echo $dados['data_de_nascimento'];?>">
            <label for="data">Data de Nascimento</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="idade" id="idade" value="<?php echo $dados['idade'];?>">
            <label for="idade">Idade</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="pri_nome" id="pri_nome" value="<?php echo $dados['primeiro_nome'];?>">
            <label for="pri_nome">Primeiro Nome</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome'];?>">
            <label for="sobrenome">Sobrenome</label>
          </div>


          <button type="submit" name="btn-editar" class="btn">Atualizar</button>
          <a href="indexO.php" class="btn green">Lista de Ouvintes</a>
        </form>
      </div>
    </div>
  </body>
</html>