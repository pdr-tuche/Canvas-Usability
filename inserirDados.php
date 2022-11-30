<?php
    include("config.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
        
    $sql = "INSERT INTO clientes (nome, email) VALUES ('{$nome}', '{$email}')";
    $response = $pdo->query($sql);
    
    if ($response == true){
        echo "<script>alert('Cadastro feito com sucesso');</script>";
        // tirando a navegaçao para exibe dados assim que submit do form chegar
        // echo "<script>location.href='exibeDados.php';</script>";
        echo "<script>location.href='index.php';</script>";
    }else{
        echo "<script>alert('Não foi possivel cadastrar');</script>";
        echo "<script>location.href='index.php';</script>";
    }

    echo "<h1> .$nome. e .$email. </h1>";
    var_dump($nome, $email);
?>