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
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixedaaa/">
  <link href="./assets/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/navbar-top-fixed.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CRUD</a>
    </div>
  </nav>


  
  <main class="container mt-5">
  <a href="create.php" class="btn btn-info mb-3"> Adicionar </a>
    <div class="bg-light p-5 rounded">
      <h1>Read - Lista de Usuários</h1>
      
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
  <script src="/CRUD_unipe/assets/bootstrap.bundle.min.js"></script>
</body>

</html>