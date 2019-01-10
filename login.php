<?php
session_start();
if(empty($_SESSION['nombre'])){
?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>IOTCorp UNAD</title>
     <link rel="stylesheet" href="css/master.css">
   </head>
   <body>

     <div class="login-box">
       <img class="avatar" src="img/IOTCorp.jpg" alt="Logo IOTCorp">
       <h1>Login Here</h1>
       <form action="validar.php" method="post" enctype="application/x-www-form-urlencoded">
         <!-- USERNAME -->
         <label for="caja1">
           <p>Username</p>
           <p><input type="text" id="caja1" name="usuario" placeholder="Enter Username" required></p>
         </label>
         <!-- PASSWORD -->
         <label for="caja2">
           <p>Password</p>
           <p><input type="password" id="caja2" name="password" placeholder="Enter Password" required></p>
         </label>

         <input type="submit" value="Log In">
         <a href=".#">Lost your Password?</a><br>
         <a onclick="registrar()">Don't have an account?</a>

         <script type="text/javascript">
         function registrar(){
           window.location="registrar.php";
         }
         </script>
       </form>
     </div>

   </body>
 </html>
 <?php
}else{
  print 'Bienvenido '.$_SESSION['username'].'<br>
  <p><a href="cerrar.php">Cerrar Sesion</a></p>';
}
 ?>
