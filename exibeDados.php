<?php
require("config.php");

// SELECIONANDO DADOS NO BANCO DE DADOS

$sql = $pdo->query("SELECT * FROM clientes");

// COLOCANDO DADOS NO ARRAY
if ($sql->rowCount() > 0) {
  $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Exibe Dados</a>
    </div>
  </nav>


  
  <main class="container mt-5">
  <a href="create.php" class="btn btn-info mb-3 mt-3" > Adicionar </a>
    <div class="bg-light p-5 rounded">
      <h1>Lista de Clientes</h1>
      
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">email</th>
            <th scope="col">#</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($lista as $clientes) : ?>
            <tr>
              <th scope="row"><?php echo $clientes['id']; ?></th>
              <td><?php echo $clientes['nome']; ?></td>
              <td><?php echo $clientes['email']; ?></td>
              <td>
                <a href="editarDados.php?id=<?php echo $clientes['id']; ?>" class="btn btn-warning"> Editar </a>
                <a href="apagar.php?id=<?php echo $clientes['id']; ?>" class="btn btn-danger"> Apagar </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>