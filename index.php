<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Canvas de usabilidade</title>
</head>
<body>
    <header>
        <img src="Assets/imagens/logo.png" alt = "logo">
        <h1><?php echo 'O Canvas de usabilidade'; ?></h1>
        <p>Planeje a Avaliação de Usabilidade da solução em uma única tela!</p>
        <div class="social">
            <a href="https:/www.instagram.com/ocanvasdeusabilidade/" target="_blank">
                <span><img src="Assets/imagens/icons8-instagram.svg">Instagram</span>
            </a>
            <a href="https://www.facebook.com/ocanvasdeusabilidade/" target="_blank">
                <span><img src="Assets/imagens/icons8-facebook-novo.svg">Facebook</span>
            </a>
        </div>
    </header>

    <main>
        <div class="main-content">
            <h2>O que é o Canvas de Usabilidade?</h2>
            <p>Usabilidade é um atributo de qualidade de software relacionado à facilidade de se utilizá-lo e esse atributo é relevante para vários tipos de sistemas. Para verificar se o produto ou serviço pretendido atende aos atributos de usabilidade exigidos em relação aos usuários esperados, é feita uma avaliação de usabilidade. A avaliação de usabilidade é um nome genérico para um grupo de métodos baseados na avaliação e inspeção ou exame relacionado com aspectos de usabilidade da interface com o usuário. Existem várias alternativas para se realizar a avaliação da usabilidade de uma solução. OCAU (O canvas de Avaliação de Usabilidade) é um artefato desenvolvido com a intenção de facilitar o planejamento da avaliação de usabilidade possuindo 8 dimensões:</p>
            <div class="tutorial">
                <h3>Como usar o Canvas de Usabilidade?</h3>
                <ol>
                    <li>Defina a Solução</li>
                    <ul>
                        <li>O que será avaliado?</li>
                    </ul>

                    <li>Defina os Requisitos</li>
                    <ul>
                        <li>Qual requisito ou funcionalidade será avaliado?</li>
                    </ul>

                    <li>Defina os Usuários</li>
                    <ul>
                        <li>Quem são os participantes da avaliação?</li>
                    </ul>

                    <li>Defina a(s) Tarefas</li>
                    <ul>
                        <li>Quais tarefas os participantes irão realizar?</li>
                    </ul>

                    <li>Defina o Contexto</li>
                    <ul>
                        <li>Em quais contextos estão inseridos?</li>
                    </ul>

                    <li>Defina a(s) Alternativas</li>
                    <ul>
                        <li>Quais alternativas serão utilizadas?</li>
                    </ul>

                    <li>Defina os Critérios</li>
                    <ul>
                        <li>Quais são os critérios utilizados?</li>
                    </ul>

                    <li>Defina as Métricas</li>
                    <ul>
                        <li>Quais são as métricas utilizados?</li>
                    </ul>
                </ol>  
            </div>

            <hr>

            <div class="area-downloads">
                <p>Click para fazer Download do manual</p>
                <a href="Assets/docs/ocanvasdeUsabilidade.docx" download="ocanvasdeUsabilidade">
                    <button style="width: 100%">Manual</button>
                </a>

                <p>Click para fazer Download dos casos de estudo</p>
                <a href="Assets/docs/autopass.pdf" download="autopass">
                    <button style="width: 50%">Autopass</button>
                </a>
                <a href="Assets/docs/linkedin-caso-de-exito-olx.pdf" download="olx">
                    <button style="width: 50%">OLX</button>
                </a>
            </div>

            <div class="area-formulario">
                <h2>Faça parte da nossa Newsletter</h2>
                <div class="formulario">
                    <form action="back.php" method="POST">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" />
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" />
                            <button type="submit">Enviar</button>          
                    </form>
                </div>
                <button onClick="{location.href='exibeDados.php'}">Mostrar Dados</button>
                <button onClick="{location.href='excluirDados.php';}">cancelar assinatura da newsletter</button></td> <!-- passar o nome que ele quer excluir, para pesquisar por nome e achar o id ou excluir pelo nome msm. -->
            </div>


            <div class="copyright">
                <a target="_blank" href="https://icons8.com/icon/59813/instagram">Instagram</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>
                <a target="_blank" href="https://icons8.com/icon/118466/facebook-novo">Facebook Novo</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>
            </div>
    </main>

    
</body>
</html>