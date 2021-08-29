<!DOCTYPE html>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Administração - BiblioFácil</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<script>
  sessionStorage.setItem('session', 'Deslogado');

  </script>
<!-- partial:index.partial.html -->
<form id="app" method="POST" action="" class="ui-modal" data-state="idle" autocomplete="off">
  <div class="ui-icon">
    <div class="ui-lock"></div>
  </div>
 <input class="ui-login-input" type="text" name="login" id="login" placeholder="Login" required="required"/>
  <div class="ui-subtitle">
    <span data-show="idle">
      Favor inserir uma senha.
    </span>
    <span data-show="validating">
      Validando...
    </span>
    <span data-show="error" class="ui-error">
      Senha inválida
    </span>

  </div>
  <div class="ui-password">    
    <input type="password" name="password" id="ata" class="ui-password-input" placeholder="Informe a senha" />
  </div>

  <button class="ui-submit">Entrar	</button>
  
</form>
<!-- partial -->
  <script src='https://unpkg.com/xstate@next/dist/xstate.js'></script><script  src="./script.js"></script>

</body>
</html>
