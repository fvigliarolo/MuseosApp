<!DOCTYPE html>
<html lang="en">
<head>
    <link href=".\css\css.css" rel="stylesheet" type="text/css">
    <div>
        <img src=".\img\Banner.jpg" width="1448" height="150">
       
    </div>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museos</title>
</head>

<body background=".\img\fondo.jpg">


    




    <script>
        function abrir(url) {
        open(url, top=300,left=300,width=300,height=300) ;
        }
    </script>

    <center>
<article id="article_contacto" class="clase">
        <header>
            <h1 class="page-title">Contacto</h1>
        </header>
    
        <div class="entry-content">
            <p><div role="form" class="formulario" id="formulario_contacto" lang="es-ES" dir="ltr">
    <div class="screen-reader-response" aria-live="polite"></div>
 
    <form  method="post" action="validarContacto.php" class="wpcf7-form" novalidate="novalidate">
    
    
    
    <p><label> Nombre <span class="nombre">*</span><br />
        <span class="nombre"><input type="text" name="your-name" value="" size="40" aria-required="true" aria-invalid="false" /></span> </label></p>
   
        <p><label> Email <span class="email">*</span><br />
        <span class="Email"><input type="email" name="your-email" value="" size="40" aria-required="true" aria-invalid="false" /></span> </label></p>

    <p><label> Teléfono<br />
    <span class="telefono"><input type="tel" name="telefono" value="" size="40" aria-invalid="false" /></span> </label></p>
    
    <p><label> Asunto<br />
        <span class="asunto"><input type="text" name="your-subject" value="" size="40"  aria-invalid="false" /></span> </label></p>

    <p><label> Comentario<br />
        <span class="Comentario"><textarea name="your-message" cols="40" rows="10" aria-invalid="false"></textarea></span> </label></p>

    
    <br>
    <p><input type="submit" value="Enviar" /> </p> 
    <?php

    $_SESSION['enviado']="Consulta enviada correctamente";
    $_SESSION['error']="Se ha producido un error al enviar su consulta, intentelo de nuevo";
    $_SESSION['datos']="Debe ingresar los campos de texto con *";


    ?>
    </div></form></div></div>
        </article>
    </center>
    
</body>
</html>