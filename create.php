<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Adicionar Cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><?php echo "Adicionar Cliente" ?></a>
    </div>
  </nav>

  <main class="container mt-5">
  <a href="exibeDados.php" class="btn btn-info mb-3 mt-3"> Voltar </a>
    <div class="bg-light p-5 rounded">
      <h1>Adicionar novo Cliente</h1>
      <form action="backend/back_create.php" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Digite o nome</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome">
        </div>

        <div class="container">

        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Digite o email</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="email">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>