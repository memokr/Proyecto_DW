<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$saldo=255;
session_start();
$_SESSION['usuario']=array();
$_SESSION['usuario'][0]=$usuario;
$_SESSION['usuario'][1]=$saldo;
$conexion=mysqli_connect("localhost","root","","proyecto_final");
$consulta = "SELECT*FROM login where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:dashboard.php");
}else{
    include("login.html");
    echo '<script type="text/javascript">';
    echo ' alert("USUARIO O CONTRASEÑA INCORRECTOS INTENTE DE NUEVO")';  
    echo '</script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);

 
if(isset($_POST['submit']))
{
	header('location:index.html');
}

if(isset($_POST['submit1']))
{
	header('location:registration.html');
}

 