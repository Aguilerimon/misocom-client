<?php

include 'cn.php';

$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

$insertar = "INSERT INTO usuarios(nombre,direccion,correo,contrasena) VALUES ('$nombre','$direccion','$correo','$contrasena')";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
if(mysqli_num_rows($verificar_usuario)>0)
{
	echo '<script>
alert("Este correo ya esta en uso, favor de ingresar otro")
		window.history.go(-1);
		</script>
	';
	exit;
}

$resultado = mysqli_query($conexion,$insertar);
if(!$resultado)
{
	echo '<script>
alert("Este correo ya esta en uso, favor de ingresar otro")
		window.history.go(-1);
		</script>
	';
	exit;
}
else
{
	echo 'Usuario registrado';
	header("Location: loginvista.html");
}
mysqli_close($conexion);
