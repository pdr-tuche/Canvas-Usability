<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <form action="inserirDadosLogin.php" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">usuario</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user">
        </div>

        <div class="container">

        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Senha</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
</body>
</html>