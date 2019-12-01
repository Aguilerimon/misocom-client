<?php
include 'cn.php';

$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

$consulta = "SELECT * FROM usuarios WHERE correo ='$correo' and contrasena = '$contrasena'";
$resultado = mysqli_query($conexion, $consulta);

$filas= mysqli_num_rows($resultado);
if($filas>0)
{
	echo "si jala";
//header("location:index.html");
}
else
{
	echo "Error en la autentificacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
//$dbhost = "localhost";
//$dbuser= "root";
//$dbpass = "";
//$dbname = "test2";

//$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
//if(!$conn)
//{
//	die("no hay conexion :c" .mysqli_connect_error());
//}
//$correo = $_POST["txtusuario"];
//$pass = $_POST["txtpassword"];
//$query = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo = '".$correo."' and contrasena ='".$contrasena."'");
//$nr= mysqli_num_rows($query);

//if ($nr == 1)
//{
//	echo "Ya esta inicidada su sesion como :" .$correo;
//}
//else if($nr == 0)
//{
//	header("Location: loginvista.html");
	//echo "no ingreso, usuario no existe";
//}

?>









