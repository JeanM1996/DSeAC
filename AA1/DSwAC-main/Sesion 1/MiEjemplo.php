<?php 
print("Esto es lenguaje PHP");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mi pagina en PHP</title>
</head>
<body>
	<form action="procesar.php" method="GET">
		<input type="text" name="Usuario" placeholder="Ingresa informacion">
		<input type="text" name="Clave" placeholder="Ingresar Clave">		
		<input type="text" name="Edad" placeholder="Ingresar Edad">
		<input type="submit" name="Enviar" value="Guardar">
	</form>
	Mi primer ejemplo PHP
	Hoy Sabado 8/10 GET.
</body>
</html>
<?php
	setcookie("CookieDSwAC","jean@unl.edu.ec", time()+1);
	setcookie("CookieDSwAC"," ", time()-1);
    
	if(count($_COOKIE)>0)
	{
		print ("<br>No puedo almacenar cookies porque ya existe");
	}
	else{
		print ("<br>Se almacena la cookie");
	}
?>