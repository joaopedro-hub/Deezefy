<!-- 
session_unset - Libera todas as variáveis ​​de sessão, mas o id de sessão não será destruído

session_destroy - Destrói todos os dados registrados em uma sessão, para chamar esta função, a primeira sessão deve ser registrada.

unset ($ _ SESSION ['VARIABLE_NAME']) - Isto irá remover o valor da variável que você passou.
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br" dir = "ltr">
  <head>
    <meta charset="utf-8">
    
    <title>SpotyMusic</title>
    <link rel="stylesheet" href="css/style_login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
  </head>
  <body>
    <nav id="menu-h">
      <ul>
        <li><a href="crud_login/adc_artista_login.php">Artista</a></li>
         <li><a href="crud_login/adc_ouvinte_login.php">Ouvinte</a></li>
      </ul>
      </nav> 
    <form name = "form1" action="valida_login.php" method="post" class="box">
        <!--mensagem para a falha de autennticação do login -->
        <?php
            if(isset($_SESSION['nao_autenticado'])):
        ?>
            <p>Usuario ou Senha incorretos</p>
        <?php
            endif;
            unset($_SESSION['nao_autenticado']);
        ?>
        <!--mensagem de sucesso/falha do cadastro -->
        <?php
          if(isset($_SESSION['mensagemS'])){
        ?>
            <p>Cadastrado Com sucesso!</p>
        <?php
          session_unset();
          }
        ?>
        <!--mensagem de sucesso/falha do cadastro -->
        <?php
          if(isset($_SESSION['mensagemE'])){
        ?>
            <p>Erro ao cadastrar!</p>
        <?php
          session_unset();
          }
        ?>


      <h1>Login</h1>
      <input type="text" name="email" placeholder="Email" required name="email">
      <input type="password" name="senha" placeholder="Senha" required name="senha">
      <input type="submit" name="" value="Login">
    </form>

    
  </body>
</html>
