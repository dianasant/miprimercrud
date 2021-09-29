<?php

include ("db.php"); 

/*Si existe al través del metodo Post un valor llamado */
if (isset($_POST['save'])){
 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $cedula = $_POST['cedula'];
 $telefono = $_POST['telefono'];
 $correo = $_POST['correo'];
  
  $query = "INSERT INTO registro ( nombre,apellido,cedula,telefono,correo) VALUES('$nombre','$apellido',' $cedula','$telefono','$correo')";
 $result = mysqli_query($conn,$query);
 if (!$result) {
    die("Query Failed");
 }
}
/*Redireccionar
header("location:index.php");*/
?>
