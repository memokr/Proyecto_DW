<?php
include("retirar.php");
$nombre=$_POST['nombre'];
$cuenta=$_POST['cuenta'];
$monto=$_POST['monto'];
$acepto=$_POST['acepto'];

if(isset($_POST['retirar']))
{
$conexion=mysqli_connect("localhost","root","","proyecto_final");
$ptm=$_SESSION['usuario'][0];
$saldo=$_SESSION['usuario'][2];
$cuenta1=$_SESSION['usuario'][3];
$acepto_1="ACEPTO RETIRO";
if($nombre==$ptm){
    if($cuenta==$cuenta1){
        if($acepto==$acepto_1){
        
            $dinero = "SELECT saldo FROM registro where usuario='$ptm'";
            $saldo = mysqli_query($conexion, $dinero);

            $saldo = $saldo->fetch_array();
            $quantity = intval($saldo[0]);

            $monto_int = intval($monto);
            $deposito = $quantity - $monto_int;
            $dinero1 = "UPDATE registro SET saldo='$deposito' WHERE usuario='$ptm'";
            $saldo1 = mysqli_query($conexion, $dinero1);
            echo '<script type="text/javascript">';
            echo ' alert("RETIRO CORRECTO")';  
            echo '</script>';
            header("location:dashboard.php");
        }else {
            echo '<script type="text/javascript">';
            echo ' alert("ASEGURATE DE ESCRIBIR ACEPTO RETIRO EN MAYUSCULAS")';  
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

?>