<html>
<head>
<title>Recepcion Datos</title>
</head>
<body>
<?php
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
?>

	<table>
	<tr><td>Nombre:</td><td><?php echo $nombre; ?></td></tr>
	<tr><td>Edad:</td><td><?php echo $edad; ?></td></tr>
	</table>

</body>
</html>