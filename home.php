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
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>O Canvas de usabilidade</title>
</head>
<body>
    <header>
        <div class="bar">
            <img src="assets/imagens/logo.png" alt="Logo" width="30" height="24" class="log">
            <a class="navbar-brand" href="#">
                <?php echo '<h1>O Canvas de usabilidade</h1>'; ?>
            </a>
        </div>
        



        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="https:/www.instagram.com/ocanvasdeusabilidade/" target="_blank">
                    <img class="icons" src="Assets/imagens/icons8-instagram.svg">Instagram
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"href="https://www.facebook.com/ocanvasdeusabilidade/" target="_blank">
                    <img class="icons" src="Assets/imagens/icons8-facebook-novo.svg">Facebook
                </a>
            </li>
        </ul>



        <p class="text-center">Planeje a Avaliação de Usabilidade da solução em uma única tela!</p>
        
    </header>

    <main>
    <div class="card mx-auto" style="width: 90%;">
        <div class="card-body">
            <div class="text-center">
                <h2>O que é o Canvas de Usabilidade?</h2>
                <p>Usabilidade é um atributo de qualidade de software relacionado à facilidade de se utilizá-lo e esse atributo é relevante para vários tipos de sistemas. Para verificar se o produto ou serviço pretendido atende aos atributos de usabilidade exigidos em relação aos usuários esperados, é feita uma avaliação de usabilidade. A avaliação de usabilidade é um nome genérico para um grupo de métodos baseados na avaliação e inspeção ou exame relacionado com aspectos de usabilidade da interface com o usuário. Existem várias alternativas para se realizar a avaliação da usabilidade de uma solução. OCAU (O canvas de Avaliação de Usabilidade) é um artefato desenvolvido com a intenção de facilitar o planejamento da avaliação de usabilidade possuindo 8 dimensões:</p>
            </div>
        </div>
    </div>

    <div class="text-center mx-auto mt-2" style="width:90%">
        <div class="card">
            <h3>Como usar o Canvas de Usabilidade?</h3>
            <div class="card-body">
            <li>Defina a Solução</li>
                <ol>O que será avaliado?</ol>
            <li>Defina os Requisitos</li>
                <ol>Qual requisito ou funcionalidade será avaliado?</ol>
            <li>Defina os Usuários</li>
                <ol>Quem são os participantes da avaliação?</ol>
            <li>Defina a(s) Tarefas</li>
                <ol>Quais tarefas os participantes irão realizar?</ol>
            <li>Defina o Contexto</li>
                <ol>Em quais contextos estão inseridos?</ol>
            <li>Defina a(s) Alternativas</li>
                <ol>Quais alternativas serão utilizadas?</ol>
            <li>Defina os Critérios</li>
                <ol>Quais são os critérios utilizados?</ol>
            <li>Defina as Métricas</li>
                <ol>Quais são as métricas utilizados?</ol>
            </div>
        </div>
    </div>



    <div class="row mt-4 mx-5">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Click para fazer Download do manual</h5>
        <a href="Assets/docs/ocanvasdeUsabilidade.docx" download="ocanvasdeUsabilidade">
                    <div class="d-flex justify-content-evenly">
                        <button class="btn btn-primary" type="button">Manual</button>
                    </div>
                </a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Click para fazer Download dos casos de estudo</h5>
        <div class="d-flex justify-content-evenly ">
                    <div class="row">
                        <div class="col">
                            <a href="Assets/docs/linkedin-caso-de-exito-olx.pdf" download="olx">
                                <button class="btn btn-primary" type="button">OLX</button>
                            </a>
                        </div>
                        <div class="col">
                            <a href="Assets/docs/autopass.pdf" download="autopass">
                                <button class="btn btn-primary" type="button" >Autopass</button>
                            </a>
                        </div>
                    </div>
                </div> 
      </div>
    </div>
  </div>
</div>

           

            



        
  
        <div class="container mt-5 mx-auto">
            <div class="bg-light p-5 rounded">
                <h2 class="text-center mb-4">Participe da nossa Newsletter</h2>
                <form action="inserirDados.php" method="POST">
                    <div class="row mb-3">
                        <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nome" placeholder="Preencha o campo">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="Preencha o campo">
                        </div>
                        <button type="submit" class="btn btn-primary mx-auto mt-3">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
     
        <button onClick="{location.href='login.php'}">Mostrar Dados</button>
         <!-- passar o nome que ele quer excluir, para pesquisar por nome e achar o id ou excluir pelo nome msm. -->
        

         <div class="card mt-5 text-center">
  <h5 class="card-header">
  
    Follow me on GitHub: <a href="https://github.com/pdr-tuche">@pdr-tuche</a>
  </h5>
  <div class="card-body">
  <a target="_blank" href="https://icons8.com/icon/59813/instagram">Instagram</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>
</br>
  <a target="_blank" href="https://icons8.com/icon/118466/facebook-novo">Facebook</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>
  </div>
</div>
           
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>