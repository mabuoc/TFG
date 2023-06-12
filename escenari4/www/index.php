<?php require_once "config.php"; ?>

<html>
<head>
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>
  <form action="process-login.php" method="post">
    <label for="username">Usuario:</label>
    <input type="text" id="username" name="username"><br>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>
