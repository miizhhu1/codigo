<?php
$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";
$dbname= "login";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(! $conn)
{
    die("No hay conexión:".mysqli_connect_error());

}

$nombre = $_POST["usuario"];
$pass = $_POST["contrasena"];
$query= mysqli_query($conn, "SELECT * FROM login Where usuario='".$nombre."' and contraseña = '".$pass."'");
$nr= mysqli_num_rows($query);

if($nr == 1)
{
    header("Location: index.html");
    echo "Bienvenido:" .$nombre;
}
else if ($nr ==0)
{
    header("Location: login.html");
    echo "No ingreso";
}


?>