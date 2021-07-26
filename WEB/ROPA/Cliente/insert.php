<?php 

include('../Recursos/conexion.php');

$N=$_POST['txtNombre']; // creacion de variable y captura
$A=$_POST['txtApellido']; // creacion de variable y captura

$insert ="INSERT INTO datos(id,NOMBRE,APELLIDO)values(NULL,'$N','$A')";

$consulta=mysqli_query($con,$insert);

if($N!=""||$A!=""){

if(!$consulta){

    echo '<script>
          alert("No se puedo Registrar");
          </script>';


}else{
    echo '<script>
          alert("se Registro  con exitó");
          window.location.href="registrar.php";
          </script>';
}
mysqli_close($con);
}
?>