<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    include("config.php");
    include("index.php");
        
    $sql = "INSERT INTO clientes (nome, email) VALUES ('{$nome}', '{$email}')";
    $response = $connection->query($sql);
    
    if ($response == true){
        echo "<script>alert('Cadastro feito com sucesso');</script>";
        echo "<script>location.href='exibeDados.php';</script>";
    }else{
        echo "<script>alert('Não foi possivel cadastrar');</script>";
        echo "<script>location.href='index.php';</script>";
    }

    echo "<h1> .$nome. e .$email. </h1>";
?>