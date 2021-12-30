<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro Ouvinte </title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </head>

    <body>
    <div class="row">
      <div class="col s12 m6 push-m3">
        <h3 class="light">Cadastrar Ouvinte</h3>
        <form action="cria_ouvinte_login.php" method="POST">
          <div class="input-field col s12">
            <input type="text" name="email" id="email" required name="email">
            <label for="email">Email</label>
          </div>

          <div class="input-field col s12">
            <input title="Senha Criptografada" type="password" name="senha" id="senha" required name="senha">
            <label for="senha">Senha</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="data" id="data" placeholder="DD-MM-YYYY" required pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" required name="data">
            <label for="data">Data de Nascimento</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="pri_nome" id="pri_nome" required name="pri_nome">
            <label for="pri_nome">Primeiro Nome</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="sobrenome" id="sobrenome" required name="sobrenome">
            <label for="sobrenome">Sobrenome</label>
          </div>

          

          <button type="submit" name="btn_cadas_ouvinte" class="btn">Cadastrar</button>
        </form>
      </div>
    </div>
    </body>
</html>