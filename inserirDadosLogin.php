<?php
    include("config.php");

    $user = $_POST['user'];
    $pass = $_POST['pass'];
        
    if ($user == "admin" && $pass == "admin"){    
        echo "<script>location.href='exibeDados.php';</script>";
    }else if($user == "user" && $pass == "pass"){
        echo "<script>location.href='home.php';</script>";
    }else{
        echo "<script>alert('Não foi possivel logar');</script>";
        echo "<script>location.href='index.php';</script>";
    }
?>