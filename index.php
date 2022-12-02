<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title><?php echo "login" ?></title>
</head>
<body>
 <section class="vh-100" style="background-color: #3d3d3d;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="./assets/imagens/logo.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <h1>Login</h1>
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

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>