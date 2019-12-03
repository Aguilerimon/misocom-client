<?php

include 'cn.php';

$nombres = $_POST["nombres"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

$insertar = "INSERT INTO clientes(nombres,direccion,correo,contrasena) VALUES ('$nombres','$direccion','$correo','$contrasena')";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM clientes WHERE correo = '$correo'");
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
