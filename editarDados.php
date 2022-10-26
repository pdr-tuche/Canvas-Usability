<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar dados</h1>
    <div class="formulario">
                    <form action="back.php" method="POST">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" />
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" />
                            <button type="submit">Enviar</button>          
                    </form>
                </div>

<?php
    echo "<button onClick=\"{location.href='exibeDados.php'; }\">Voltar</button>";
?>
</body>
</html>