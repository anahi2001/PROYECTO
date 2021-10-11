<?php

include("conexion.php");

$nombre = $_POST['usuario'];
$pass   = $_POST['pass'];


//Login
if(isset($_POST["btningresar"])){
    $query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '$nombre' AND  password = '$pass'");
    $nr = mysqli_num_rows($query);

    if($nr==1){
        echo "<script> alert ('Bienvenid@ $nombre'); window.location= 'principal.php' </script>";
    }else{
        echo "<script> alert ('Este usuario no exixte'); window.location= '' </script>";

    }
}