<?php
//abrindo a sessão
session_start();
//incluindo a conexao
include_once '../Projeto/conexao.php';
?>
<html lang="pt-br" dir = "ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Tela Artista</title>
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
          <li><a href="indexA.php">Artista</a></li>
          <li><a href="../ouvinte/indexO.php">Ouvinte</a></li>
          <li><a href="../musica/indexM.php">Música</a></li>
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
        if(isset($_SESSION['mensagemA'])):?>
        <script>
          //mensagem de alerta
          window.onload = function(){
            M.toast({html: '<?php echo $_SESSION['mensagemA'];?>'})
          };
        </script>
      <?php  
        endif;
        //para todas as sessões
        //session_unset();
        //para uma sessão específica
        unset($_SESSION['mensagemA']);
      ?>
      
    <div class="row">
      <div class="col s12 m6 push-m3">
        <h3 class="light">Artistas</h3>
        <table class="striped">
          <thead>
            <tr>
              <th>Email:</th>
              <th>Nome Artístico:</th>
              <th>Biografia:</th>
              <th>Ano de Formação:</th>
            </tr>
          </thead>
          
          <tbody>
            <?php
              //listando artistas
              //https://stackoverflow.com/questions/40661203/mysqli-fetch-array-using-a-foreach-loop
              $sql = "SELECT * FROM deezefy.artista;";
              $resultado = mysqli_query($conexao,$sql);
              //inserindo linhas caso não tenha mais nenhum registro
              if(mysqli_num_rows($resultado) > 0):

              while($dados = mysqli_fetch_array($resultado)):
            ?>
            <tr>
              <td><?php echo $dados['email'];?></td>
              <td><?php echo $dados['nome_artistico'];?></td>
              <td><?php echo $dados['biografia'];?></td>
              <td><?php echo $dados['ano_formacao'];?></td>
              <td><a href="editar_artista.php?id=<?php echo $dados[0]; ?>" title="Editar" class="btn-floating orange"><i class="material-icons">edit</i>
              </a></td>
              <td><a href="#modal<?php echo $dados[0]; ?>" title="Excluir" class="btn-floating red modal-trigger"><i class="material-icons">delete</i>
              </a></td>
              <!-- Modal Structure -->
                <div id="modal<?php echo $dados[0]; ?>" class="modal">
                  <div class="modal-content">
                    <h4>Opa!</h4>
                      <p>Tem certeza que deseja excluir esse artista?</p>
                  </div>
                  <div class="modal-footer">
                  <form action="crud/deleta_artista.php" method="POST">
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
              <td>---</td>
              </tr>
            <?php
            endif;
            ?>

          </tbody>
        </table>
        <br>
        <a href="adiciona_artista.php" class="btn">Adiconar Artista</a>
      </div>
    </div>
              <script>
                M.AutoInit();
              </script>
  </body>
  </html>
