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

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
    if($pass1 == $pass2){
        $sql = "INSERT INTO usuario (nombre, correo, pass) VALUE ('".$nombre."','".$correo."','".$pass1."')";

        if(mysqli_query($conn,$sql)){
            header("Location:index.html");
        }else{
            echo "ERROR AL REGISTRARSE";
        }
    }else {
        echo "Verifique las Contraseñas";
    }

    /* $sql = mysqli_query($conn," SELECT * FROM usuario WHERE correo='".$correo."' AND pass='".$pass."'");
    $resultado = mysqli_num_rows($sql);

    if($resultado ==1){
    $sql=mysqli_query($conn, "SELECT id FROM usuario WHERE correo='".$correo."' AND pass ='".$pass."'");
    $fila =mysqli_fetch_array($sql);

    header("Location: /Login/sesion/index.php?fg=$fila[id]");
    }else{
    header("Location: index.html");
    }*/
}
?>