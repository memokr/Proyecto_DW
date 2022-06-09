<?php
include("transacciones.php");
$nombre=$_POST['nombre'];
$cuenta=$_POST['cuenta'];
$nombre1=$_POST['nombre1'];
$cuenta_1=$_POST['cuenta1'];
$monto=$_POST['monto'];
$acepto=$_POST['acepto'];

if(isset($_POST['confirmar']))
{
$conexion=mysqli_connect("localhost","root","","proyecto_final");
$ptm=$_SESSION['usuario'][0];
$saldo=$_SESSION['usuario'][2];
$cuenta1=$_SESSION['usuario'][3];
$acepto_1="ACEPTO TRANSACCIÓN";
$verificar = "SELECT cuenta FROM registro where cuenta='$cuenta_1'";
$verificacion = mysqli_query($conexion, $verificar);
if(mysqli_num_rows($verificacion)==0){
    echo '<script type="text/javascript">';
    echo ' alert("CUENTA NO REGISTRADA CON BANCO DE METRO CIUDAD")';  
    echo '</script>';
} else{

if($nombre==$ptm){
    if($cuenta==$cuenta1){
        if($acepto==$acepto_1){
        
            $dinero = "SELECT saldo FROM registro where cuenta='$cuenta'";
            $saldo = mysqli_query($conexion, $dinero);

            $saldo = $saldo->fetch_array();
            $quantity = intval($saldo[0]);

            $monto_int = intval($monto);
            $retiro = $quantity - $monto_int;
            $dinero1 = "UPDATE registro SET saldo='$retiro' WHERE cuenta='$cuenta'";
            $saldo1 = mysqli_query($conexion, $dinero1);

            $dinero2 = "SELECT saldo FROM registro where cuenta='$cuenta_1'";
            $saldo2 = mysqli_query($conexion, $dinero2);

            $saldo2 = $saldo2->fetch_array();
            $quantity2 = intval($saldo2[0]);

            $deposito = $quantity2 + $monto_int;
            $dinero3 = "UPDATE registro SET saldo='$deposito' WHERE cuenta='$cuenta_1'";
            $saldo3 = mysqli_query($conexion, $dinero3);

            echo '<script type="text/javascript">';
            echo ' alert("TRANSACCIÓN CORRECTA")';  
            echo '</script>';
            header("location:dashboard.php");
        }else {
            echo '<script type="text/javascript">';
            echo ' alert("ASEGURATE DE ESCRIBIR ACEPTO TRANSACCIÓN EN MAYUSCULAS")';  
            echo '</script>';



        }
    }
    else{
        echo '<script type="text/javascript">';
        echo ' alert("CUENTA INCORRECTA")';  
        echo '</script>';

    }
}
else{
    echo '<script type="text/javascript">';
    echo ' alert("NOMBRE INCORRECTO")';  
    echo '</script>';

}
}
}

?>