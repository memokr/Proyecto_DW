<?php

$conexion=mysqli_connect("localhost","root","","proyecto_final");

$user=$_POST['usuario'];
$password=$_POST['password'];
$email=$_POST['email'];
$saldo=0;
$cuenta=uniqid();
$verificar = "SELECT usuario FROM registro where usuario='$user'";
$verificacion = mysqli_query($conexion, $verificar);
$verificar1 = "SELECT email FROM registro where email='$email'";
$verificacion1 = mysqli_query($conexion, $verificar1);
if(mysqli_num_rows($verificacion)==0){
    if(mysqli_num_rows($verificacion1)==0){
        if($user==NULL or $password==NULL or $email==NULL){
            include("registration.html");
            echo '<script type="text/javascript">';
            echo ' alert("Favor de completar todos los datos")';  
            echo '</script>';
        } else {
            $sql = "INSERT INTO registro (usuario,password,email,saldo,cuenta) VALUES ('$user','$password','$email','$saldo','$cuenta')";
            $sql1 = "INSERT INTO login (usuario,password) VALUES ('$user','$password')";
            $result = mysqli_query($conexion, $sql);
            $result1 = mysqli_query($conexion, $sql1);

            if($result){
                header('location:login.html');
            }
            else{
                include("registration.html");
                echo '<script type="text/javascript">';
                echo ' alert("DATOS INCOMPLETOS INTENTE DE NUEVO")';  
                echo '</script>';
            }
        }
    } else{
        include("registration.html");
        echo '<script type="text/javascript">';
        echo ' alert("EMAIL YA REGISTRADO CON BANCO DE METROCIUDAD")';  
        echo '</script>';

    }
} else {
    include("registration.html");
    echo '<script type="text/javascript">';
    echo ' alert("USUARIO YA REGISTRADO CON BANCO DE METROCIUDAD")';  
    echo '</script>';
}

if(isset($_POST['home']))
{
    header('location:index.html');
}
?>