<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Bootstrap
          </a>
        </div>
      </nav>

<h1>Iniciar Sesion</h1>


<div> 

<form action="login.php" method="POST"> 
<label>Usuario : </label>  
<input type="text" placeholder="Email" name="Email" required><br>
<label>Clave : </label> 
<input type="password" placeholder="Clave" name="Clave" required><br>
 
 

<a> Olvide mi contraseña</a><br>
<button id="ingre" type="submit">Ingresar</button>
<?php 
 if(isset($_GET['e'])){

    switch($_GET['e']){ 
     case '1' :
        echo '<p>Error no existe Conexion </p>';
        break;

        case '2' :
            echo '<p> Error con el Email </p>';
            break;
           
            case '3' :
             echo '<p> Clave Incorrecta  </p>';
         break;
         default:
         break;
 }
}

?>

 
</form>
</div>




</html>