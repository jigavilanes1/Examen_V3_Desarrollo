<?php

include ("../Config/Database.php");

    $usuario=$_POST["usuario"];
    $password1=$_POST["password"];
   $password=hash("sha256",md5($password1));

    $conn = new DataBase();
    $sql = "select * from usuarios where usuario=? and password=?; ";
    $stmt = $conn->ms->prepare($sql);
    $stmt->bind_param("ss", $usuario, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    

    if(count($result->fetch_all())!=0){
        session_start();
        $_SESSION["usuario"]=$usuario;
        $_SESSION["password"]=$password;
        header("Location: http://localhost/Desarrollo_web/Examen3/formulario.php");
    }else{
        echo "<script>alert('Usuario o contraseñas incorrectas')
        window.location.href = 'http://localhost/Desarrollo_web/Examen3/'
        </script>";
    }

    
?>