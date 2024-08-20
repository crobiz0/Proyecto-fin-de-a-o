<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="contenedor">
<h1> Prueba de INICIO DE SESION</h1>
<form action="proceso.php" method="post">

<p><label for="nombre">Nombre</label></p> 
<input type="text"placeholder="nombre"required name="nombre">

<p><label for="correo">Correo</label></p> 
<input type="email"placeholder="email"required name="email">

<p><label for="pass">Contraseña</label></p> 
<input type="password"placeholder="contraseña"required name="pass">

<input type="submit" value="enviar datos"class="envi">
</form>
</div>


</body>
</html>