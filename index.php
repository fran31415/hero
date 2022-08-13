<?php
session_start();
$mensaje ="";

if (isset($_POST["iniciar"]))
/*podeemos usar REQUEST tambien ya que no se sabe el metodo */
{
$usuario =$_POST["usuario"];
$clave =$_POST["clave"];
$usuario =strtoupper($usuario);
if ($usuario=="ADMIN" && $clave == "12345") { 
    $_SESSION["user"]="admin";
    $_SESSION["autorizado"]= true;    
    header("location:principal.php");
}
else { $mensaje ="usuario o contraseña incorrecta";}  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
    <h2> login</h2>
    <form action="index.php" method="POST">
        <label for=""> usuario</label>
        <input type="text" name="usuario" placeholder="usuario"> <br>
        <label for=""> contraeña o clave</label>
        <input type="password" name="clave" placeholder="password"> <br>
        <button type="submit" name="iniciar">Iniciar Sesion</button>
    </form>
    
    <?php echo $mensaje; ?>
</body>
</html>