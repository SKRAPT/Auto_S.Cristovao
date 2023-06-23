<!DOCTYPE html>
<html>
<head>
  <title>Formulário de Login e Registro</title>
  <link rel="stylesheet" href="login css/style.css">
</head>
<body>
  <div class="container">
    <div class="login-container">
      <h2>Login</h2>
      <form action="processar_login.php" method="post">
        <div class="form-group">
          <label for="username">Usuário:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Senha:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
          <button type="submit">Entrar</button>
        </div>
      </form>
      <p class="register-link">Ainda não tem uma conta? <a href="#registro">Registrar</a></p>
    </div>
  </div>

  <div id="registro" class="overlay">
    <div class="popup">
      <h2>Registrar</h2>
      <a class="close" href="#">&times;</a>
      <form action="processar_registro.php" method="post">
        <div class="form-group">
          <label for="username">Usuário:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Senha:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
          <button type="submit">Registrar</button>
        </div>
      </form>
    </div>
  </div>

  <script src="login css/script.js"></script>
</body>
</html>
