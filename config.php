<?php
    $BASE = "clientesweb"; // nome do banco de dados
	$HOST = "localhost"; // local onde está o banco de dados
	$USER = "root"; // nome do usuário do bando de dados
    $PASS = "";

	$pdo = new PDO("mysql:dbname=".$BASE.";host:".$HOST."", "".$USER."", $PASS);
?>