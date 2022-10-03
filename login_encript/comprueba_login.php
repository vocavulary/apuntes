<?php

$con = new mysqli('localhost','root','','loginval');

if ($con->connect_errno){
    echo 'no hay conexion ('.$con->connect_errno.')'.$con->connect_error;
}
$usuario=$_POST['login'];
$pas= $_POST['password'];


//registro
if (isset($_POST['registrar'])){
    
    
    //variable que encritara la clave
    $pass_fuerte = password_hash($pas, PASSWORD_DEFAULT);
    $query_registar = "INSERT INTO usuarios(usuario,contraseÃ±a) VALUES ('$usuario','$pass_fuerte') ";
    
    
    //si el registro fue exitoso
    
    if(mysqli_query($con, $query_registar)){
        
        echo "registrado :$usuario";
        
    }else{
        echo "no registrado: .$query_registar.<br>".mysql_error($con);
    }
}
// iniciar sesion

 if(isset($_POST['btn_login'])){
               
                $query_usuario = mysqli_query($con, "SELECT * FROM usuarios WHERE usuario = '$usuario'");
               
                $nr = mysqli_num_rows($query_usuario);
               
                $buscarpass = mysqli_fetch_array($query_usuario);
               
                if(($nr==1) && (password_verify($pas, $buscarpass['contraseña']))){
                   
                    echo "Bienvenido: $usuario";
                   
                }else{
                    echo "Contraseña incorrecta";
                }
               
            }
           