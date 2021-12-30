<?php
//abrindo a sessão
session_start();
//incluindo a conexao
include_once '../Projeto/conexao.php';
?>

<html lang="pt-br" dir = "ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Tela Música</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>      
      <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">Menu</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="../tela_geral.php">Home</a></li>
          <li><a href="../artista/indexA.php">Artista</a></li>
          <li><a href="../ouvinte/indexO.php">Ouvinte</a></li>
          <li><a href="indexM.php">Música</a></li>
          <li><a href="../album/indexAL.php">Album</a></li>
          <li><a href="#">Playlist</a></li>
          <li>Usuário:<?php 
                              //echo $_SESSION['email'];
                                $emailLogin = $_SESSION['email'];
                                $parte = explode("@",$emailLogin);
                                echo $parte[0];
                      ?></li>
        </ul>
      </div>
    </nav>
    <?php
        if(isset($_SESSION['mensagemM'])):?>
        <script>
          //mensagem de alerta
          window.onload = function(){
            M.toast({html: '<?php echo $_SESSION['mensagemM'];?>'})
          };
        </script>
      <?php  
        endif;
        //para todas as sessões
        //session_unset();
        //para uma sessão específica
        unset($_SESSION['mensagemM']);
      ?>
        
    <div class="row">
      <div class="col s12 m6 push-m3">
        <h3 class="light">Músicas</h3>
        <table class="striped">
          <thead>
            <tr>
              <th>Nome:</th>
              <th>Duração:</th>
              <th>Artista:</th>
            </tr>
          </thead>
          
          <tbody>
            <?php
              //listando musicas com o seu artista
              $sql = "SELECT id,nome,duracao,Artista_email FROM deezefy.musica m JOIN deezefy.grava g ON m.id = g.Musica_id;";
              $resultado = mysqli_query($conexao,$sql);
              //inserindo linhas caso não tenha mais nenhum registro
              if(mysqli_num_rows($resultado) > 0):

              while($dados = mysqli_fetch_array($resultado)):
            ?>
            <tr>
              <td><?php echo $dados['nome'];?></td>
              <td><?php echo $dados['duracao'];?></td>
              <td><?php echo $dados['Artista_email'];?></td>
              <td><a href="editar_musica.php?id=<?php echo $dados[0]; ?>" title="Editar" class="btn-floating orange"><i class="material-icons">edit</i>
              </a></td>
              <td><a href="#modal<?php echo $dados[0]; ?>" title="Excluir" class="btn-floating red modal-trigger"><i class="material-icons">delete</i>
              </a></td>
              <!-- Modal Structure -->
                <div id="modal<?php echo $dados[0]; ?>" class="modal">
                  <div class="modal-content">
                    <h4>Opa!</h4>
                      <p>Tem certeza que deseja excluir essa música?</p>
                  </div>
                  <div class="modal-footer">
                  <form action="crud/deleta_musica.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $dados[0]; ?>">
                    <button type="submit" name="btn-deletar" class="btn red">Sim,quero deletar!</button>
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                  </form>

                  </div>
                </div>

            </tr>
            <?php 
            endwhile;else:?>
              <tr>
              <td>---</td>
              <td>---</td>
              <td>---</td>
              </tr>
            <?php
            endif;
            ?>

          </tbody>
        </table>
        <br>
        <a href="adiciona_musica.php" class="btn">Adiconar Música</a>
      </div>
    </div>
              <script>
                M.AutoInit();
              </script>
  </body>
</html>