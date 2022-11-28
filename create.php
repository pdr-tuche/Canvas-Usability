<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">
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
  <a href="exibeDados.php" class="btn btn-info mb-3"> Voltar </a>
    <div class="bg-light p-5 rounded">
      <h1>Create - Criar novo Usuário</h1>
      <form action="backend/back_create.php" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Digite Seu Nome</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome">
        </div>

        <div class="container">

        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Digite seu email</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="email">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
  </main>
  <script src="/CRUD_unipe/assets/bootstrap.bundle.min.js"></script>
</body>

</html>