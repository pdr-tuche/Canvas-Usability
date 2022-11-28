<?php 

  require("../config.php");
	
	// $pdo = new PDO("mysql:host=localhost; dbname=corposmigrantesc_crud", "corposmigrantesc_pedro", "WD&6l[~WS}Y;");

	$nome = $_REQUEST['nome'];
	$email = $_REQUEST['email'];
		
	// INSERINDO DADOS NO BANCO DE DADOS
	// $pdo->query("INSERT INTO `usuarios` (nome, telefone) VALUES ('$nome', '$telefone')"); 

	// $pdo->query("INSERT INTO `tarefas` (titulo, descricao) VALUES ('$titulo', '$descricao')"); 

	 $pdo->query("INSERT INTO `clientes` (nome, email) VALUES ('$nome', '$email')"); 
	 
     header("Location: ../exibeDados.php")

	//echo "Dados Salvos com sucesso";
		
	// mysqli_close();
	
?> 
