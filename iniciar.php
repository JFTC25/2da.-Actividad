<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyec";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("Conexion Fallida: ".mysqli_connect_error());
}else{
    echo "Conexión Completada ";
}

$correo = $_POST['correo'];
$pass = $_POST['pass'];

$sql = mysqli_query($conn," SELECT * FROM usuario WHERE correo='".$correo."' AND pass='".$pass."'");
$resultado = mysqli_num_rows($sql);

if($resultado ==1){
    $sql=mysqli_query($conn, "SELECT id FROM usuario WHERE correo='".$correo."' AND pass ='".$pass."'");
    $fila =mysqli_fetch_array($sql);
    header("Location: inicio.php");
    //header("Location: /Login/sesion/index.php?fg=$fila[id]");
}else{
    header("Location: index.html");
}
?>