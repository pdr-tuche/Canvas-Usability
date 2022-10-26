<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibe Dados</title>
</head>
<body>
    <h1>Exibe dados</h1>
    <?php
        include("config.php");
        $sql = "SELECT * FROM `clientes`;";

        $res = $connection->query($sql);

        echo"<table border = >";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>nome</th>";
            echo "<th>email</th>";
             echo "</tr>";
        while($row = $res->fetch_object()){
            echo"<tr>";
            echo"<td>".$row->id."</td>";
            echo"<td>".$row->nome."</td>";
            echo"<td>".$row->email."</td>";
            echo"<td><button onClick=\"{location.href='editarDados.php';}\">Editar dados</button></td>"; // tenho q passar o nome ou id doq ele quer mudar
            echo"</tr>";

        }
        echo "</table>";

        echo "<button onClick=\"{location.href='index.php'; }\">Voltar</button>"
    

    ?>
    
</body>
</html>