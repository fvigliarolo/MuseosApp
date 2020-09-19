<?php 

class login{
  public $var ='<html>

   <head>
       <meta charset="UTF-8">
       <title>Login</title>
       <link rel="stylesheet" href="..\login\css\login-estilo.css">
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
   </head>
   
   <body background=".\img\Fondo_login.jpg">
       <div id="container-login">
           <div id="title">
               <i class="material-icons lock">lock</i> Login
           </div>
           
           <form method="post" action="..\login\ValidarLogin.php">
               <div class="input">
                   <div class="input-addon">
                       <i class="material-icons">face</i>
                   </div>
                   <input id="username" placeholder="Email address" type="text" required class="validate" autocomplete="off" name="campo_mail_html">
               </div>
   
               <div class="clearfix"></div>
   
               <div class="input">
                   <div class="input-addon">
                       <i class="material-icons">vpn_key</i>
                   </div>
                   <input id="password" placeholder="Password" type="password" required class="validate" autocomplete="off" name="campo_password_html">
   
   
               </div>
   
               <input type="submit" value="Log In" />
   
   
   
           </form>
   
   
   
   
   
           <div class="forgot-password">';
           
             
         public  $var2= $_SESSION['errorlog'] = "<p class='error2'>Usuario y/o contraseña incorrectos</p>";
               
   
         public  $var3='</div>
   
   
           <div class="register">
               ¿No tienes una cuenta aún?
               <a href="..\registro\registrarPrincipal.php"><button id="register-link">Registrarse</button></a>
           </div>
       </div>
   
   </body>
   
  
   
   
   
   
   
   
   </html>';
 
 public $var0 = echo $var.$var2.$var3;
 
 return $var0;
}
?>