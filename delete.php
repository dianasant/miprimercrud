<?php 
include ("db.php");


if(isset($_GET['id'])){
    $id =$_GET ['id'];
    $query = "DELETE FROM registro WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Registro eliminado Satisfactoriamente';
    $_SESSION['message_type'] ='danger';
    header ("location: index.php");


}

 
?>