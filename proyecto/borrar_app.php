<?php
session_start();
$acepto=$_POST['acepto'];
$cuenta=$_POST['cuenta'];
$cuenta1=$_SESSION['usuario'][3];
$conexion=mysqli_connect("localhost","root","","proyecto_final");
$acepto_1="ACEPTO BORRAR CUENTA";
if($acepto==$acepto_1){
    if($cuenta==$cuenta1){
            $borrar = "DELETE FROM registro WHERE cuenta = '$cuenta'";
            $resultado = mysqli_query($conexion, $borrar);  
    }else{
            echo '<script type="text/javascript">';
            echo ' alert("CUENTA INCORRECTA")';  
            echo '</script>';
    
        }

}else {
    echo '<script type="text/javascript">';
    echo ' alert("ASEGURATE DE ESCRIBIR ACEPTO BORRAR CUENTA")';  
    echo '</script>';
}

if(isset($_POST['borrar']))
{
    header('location:index.html');
}
?>