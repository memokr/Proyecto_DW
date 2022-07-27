<?php 
$conexion=mysqli_connect("localhost","root","","proyecto_final");
$ptm=$_SESSION['usuario'][0];
$dinero = "SELECT saldo FROM registro where usuario='$ptm'";
$saldo = mysqli_query($conexion, $dinero);

$hero_object1 = mysqli_fetch_object($saldo);
$hero_name1 = $hero_object1->saldo;
$_SESSION['usuario'][2]=$hero_name1;

$cuenta= "SELECT cuenta FROM registro where usuario='$ptm'";
$no_cuenta=mysqli_query($conexion, $cuenta);
$hero_object2 = mysqli_fetch_object($no_cuenta);
$hero_name2 = $hero_object2->cuenta;
$_SESSION['usuario'][3]=$hero_name2;


 
?>