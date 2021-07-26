<?php 
include('../Recursos/conexion.php'); // Utilizando la conexion de base de datos

//1: Error de conexion
//2: Email invalido
//3: Contraseña incorrecta

$Email=$_POST['Email'];
$sql="SELECT * FROM USUARIO WHERE Email='$Email'";
$result=mysqli_query($con,$sql);
if ($result) {
	$row=mysqli_fetch_array($result);
	$count=mysqli_num_rows($result);
	if ($count!=0) {
		$Clave=$_POST['Clave'];

		if ($row['Clave']!=$Clave) {
			header('Location: Iniciar.php?e=3');
		}else{
			 header('Location:  ../index.html');//Cuando Ingresa
		}
	}else{
		 
		header('Location: Iniciar.php?e=2');
	}
}else{
	header('Location: Iniciar.php?e=1');
}