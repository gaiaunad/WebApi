<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Registro </title>
    <link rel="stylesheet" href="css/masterR.css">
  </head>

  <body>
    <?php session_start(); ?>
    <div class="register-box">
      <h1>Register Here</h1>
      <form action="insertar.php" method="post" enctype="application/x-www-form-urlencoded">

        <label for="caja1"><p>Nombre de Usuario</p>
          <p><input type="text" id="caja1" name="usuario" placeholder="Nombre" required autofocus></p>
        </label>

        <label for="caja2"><p>Email</p>
          <p><input type="text" id="caja2" name="mail" placeholder="E-mail" required autofocus></p>
        </label>

        <label for="caja3"><p>Contraseña</p>
          <p><input type="password" id="caja3" name="password_1" placeholder="Contraseña" required autofocus></p>
        </label>

        <label for="caja4"><p>Confirmar Contraseña</p>
          <p><input type="password" id="caja4" name="password_2" placeholder="Confirmar Contraseña" required autofocus></p>
        </label>

      <input type="submit" name="register" value="Registrarse">
      <a onclick="login()">Already a member?</a>

      <script type="text/javascript">
        function login(){
          window.location="index.php";
        }
      </script>
      </form>
    </div>
  </body>
</html>
