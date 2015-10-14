<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Ejemplo de formularios</title>
	</head>
	<body>
<?php
	$user = $_POST['nombre_usuario'];
	echo "Foto DNI:<br/>";
	copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
	$nom=$_FILES['foto']['name'];
	echo "<img src=\"$nom\"><br/>";
	echo "Nombre de usuario: $user<br/>";
	echo "Contraseña: $_POST[clave]<br/>";
	echo "Ciudad: $_POST[ciudad_combo]<br/>";
	echo "Aficiones:";
	foreach ($_POST['aficiones'] as $opcionAficiones) {
	echo $opcionAficiones.", ";
	}
	echo "<br/>";
	echo "Deportes:";
	foreach ($_POST['deporte'] as $opcionDeporte) {
	echo $opcionDeporte.", ";
	}	
	echo "<br/>";
	echo "Sexo: $_POST[sexo]<br/>";
	echo "Fecha de nacimiento: $_POST[fecha]<br/>";
	echo "Email: $_POST[email]<br/>";
	echo "Teléfono: $_POST[telefono]<br/>";
	





?>
</body>
</html>