<?php
session_start();
//incluindo a conexao
include_once '../Projeto/conexao.php';
?>
<html lang="pt-br" dir = "ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Tela Principal</title>
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
          <li><a href="pos_login/tela_geral.php">Home</a></li>
          <li><a href="artista/indexA.php">Artista</a></li>
          <li><a href="ouvinte/indexO.php">Ouvinte</a></li>
          <li><a href="musica/indexM.php">Música</a></li>
          <li><a href="album/indexAL.php">Album</a></li>
          <li><a href="#">Playlist</a></li>
          <li>Usuário:<?php 
                                //echo $_SESSION['email'];
                                $emailLogin = $_SESSION['email'];
                                $parte = explode("@",$emailLogin);
                                echo $parte[0];
                      ?></li>
          <?php
                //session_start();
                include('verifica_sessao.php');
              ?>
              
              <li><a href="logout.php">Sair</a></li>
        </ul>
      </div>
    </nav>

    <div class="row">
      <div class="col s12 m6 push-m3">
      <h2 class="light">Informações Gerais</h2>
        <h5 class="light">Quantidade de Artistas</h5>
        <table class="striped">
          <thead>
            <tr>
              <th>Quantidade:</th>
            </tr>
          </thead>
          
          <tbody>
            <?php
              //listando artistas
              $sql = "SELECT count(email) AS qtd FROM deezefy.artista";
              $resultado = mysqli_query($conexao,$sql);
              //inserindo linhas caso não tenha mais nenhum registro
              if(mysqli_num_rows($resultado) > 0):

              while($dados = mysqli_fetch_array($resultado)):
            ?>
            <tr>
              <td><?php echo $dados['qtd'];?></td>
            </tr>
            <?php 
            endwhile;else:?>
              <tr>
              <td>---</td>
              </tr>
            <?php
            endif;
            ?>
          </tbody>
        </table>
        
        <h5 class="light">Quantidade de Ouvintes</h5>
        <table class="striped">
          <thead>
            <tr>
              <th>Quantidade:</th>
            </tr>
          </thead>
          
          <tbody>
            <?php
              //listando artistas
              $sql = "SELECT count(email) AS qtd FROM deezefy.ouvinte";
              $resultado = mysqli_query($conexao,$sql);
              //inserindo linhas caso não tenha mais nenhum registro
              if(mysqli_num_rows($resultado) > 0):

              while($dados = mysqli_fetch_array($resultado)):
            ?>
            <tr>
              <td><?php echo $dados['qtd'];?></td>
            </tr>
            <?php 
            endwhile;else:?>
              <tr>
              <td>---</td>
              </tr>
            <?php
            endif;
            ?>
          </tbody>
        </table>

        <h5 class="light">Quantidade de Albuns</h5>
        <table class="striped">
          <thead>
            <tr>
              <th>Quantidade:</th>
            </tr>
          </thead>
          
          <tbody>
            <?php
              //listando artistas
              $sql = "SELECT count(id) AS qtd FROM deezefy.album";
              $resultado = mysqli_query($conexao,$sql);
              //inserindo linhas caso não tenha mais nenhum registro
              if(mysqli_num_rows($resultado) > 0):

              while($dados = mysqli_fetch_array($resultado)):
            ?>
            <tr>
              <td><?php echo $dados['qtd'];?></td>
            </tr>
            <?php 
            endwhile;else:?>
              <tr>
              <td>---</td>
              </tr>
            <?php
            endif;
            ?>
          </tbody>
        </table>

        <h5 class="light">Quantidade de Músicas</h5>
        <table class="striped">
          <thead>
            <tr>
              <th>Quantidade:</th>
            </tr>
          </thead>
          
          <tbody>
            <?php
              //listando artistas
              $sql = "SELECT count(id) AS qtd FROM deezefy.musica";
              $resultado = mysqli_query($conexao,$sql);
              //inserindo linhas caso não tenha mais nenhum registro
              if(mysqli_num_rows($resultado) > 0):

              while($dados = mysqli_fetch_array($resultado)):
            ?>
            <tr>
              <td><?php echo $dados['qtd'];?></td>
            </tr>
            <?php 
            endwhile;else:?>
              <tr>
              <td>---</td>
              </tr>
            <?php
            endif;
            ?>
          </tbody>
        </table>


        <br>
      </div>
    </div>

  </body>
  </html>
