<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teach Help</title>
        <link rel="icon" type="image/x-icon" href="img/logo.png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="css/perfilAlunoBootstrap.css">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    </head>
<body>
    <!--Cabecalho do site-->
    <header>
    <!--Barra de navegação-->
     <nav class="navbar navbar-expand-lg bg-corHeader">
        <div class="container-fluid">
        <!--Logo do site-->
        <a class="navbar-brand" href="menuBootstrap.php">
            <img src="img/logoBranca.png" width="50" height="20" class="d-inline-block align-top" alt="">
        </a>
        <!--Itens da Navbar-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="menuBootstrap.php" id="navHome">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="perfilAlunoBootstrap.php" id="navHome">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="menuBootstrap.php" id="navHome">Matérias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" id="navHome" onclick="alert()">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" id="navHome" onclick="alerta()">Configurações</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control-ss form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-light" type="submit" onclick="alerta()"><img src="img/lupa.png" class="lupa"></button>
            </form>
        </div>
        </div>
    </nav>
   </header>
    <!--Criação da classe container com display flex para que as próximas divs fiquem lado a lado e justify-content-center para que as divs fiquem centralizadas-->
    <div class="container mt-5 d-flex justify-content-center">
        <!--Criação da div left ocupando colunas variadas da div container de acordo com o dispositivo utilizado, texto centralizado e branco-->
        <div class="left col-11 col-sm-11 col-md-11 col-lg-3 text-center text-white shadow-lg">
            <!--Criação de imagem com classe img-fluid para responsividade, bordas arredondadas, margin automático, display block, margin top 4 e margin botton 4-->
            <img src="img/ImgFidelis.jpg" alt="Fidelis" class="img-fluid col-9 rounded mx-auto d-block mt-4 mb-4">
            <!--Texto h4 com padding horinzontal igual a 4-->
            <h4 class="px-4">Fidelis Zanetti de Castro</h4>
            <!--Paragrafo com padding horizontal igual a 4-->
            <p class="px-4">Tenho interesse em Matemática, Machine Learning e Música</p>
        </div>
        <!--Criação da classe right ocupando colunas variadas da div container de acordo com o dispositivo utilizado e com background branco-->
        <div class="right col-11 col-sm-11 col-md-11 col-lg-7 bg-white shadow-lg">
            <!--Criação da div info onde ficarão os dados dos alunos-->
            <div class="info" id="info">
                <!-- Criação de título h3 Informações com borda apenas em baixo, margin igual a 3 e texto sempre em Maiúsculo-->
                <h3 class="border border-top-0 border-end-0 border-start-0 m-3 text-uppercase">Informações</h3>
                <!--Criação de div para alocação de informações do usuário com texto no início de cada coluna e margin igual a 3-->
                <div class="info_data row text-start m-3" id="info_data">
                    <!--Criação de divs para cada informação com margin igual a 1 e uma nova coluna dentro da linha-->
                    <div class="data col-sm m-1">
                        <h4>
                            <span class="material-symbols-outlined rounded-circle bg-primary p-1 text-white" id="icon">
                                email
                            </span>
                            <span class="text">Email</span>
                        </h4>
                        <p>fidelis.castro@gmail.com</p>
                    </div>
                    <div class="data col-sm m-1">
                        <h4>
                            <span class="material-symbols-outlined rounded-circle bg-primary p-1 text-white" id="icon">
                                phone
                            </span>
                            <span class="text">Celular</span>
                        </h4>
                        <p>(27)99798-0102</p>
                    </div>
                    <div class="data col-sm m-1">
                        <h4>
                            <span class="material-symbols-outlined rounded-circle bg-primary p-1 text-white" id="icon">
                                home_pin
                            </span>
                            <span class="text">Endereço</span>
                        </h4>
                        <p>Av. dos Sabiás, 330 - Morada de Laranjeiras, Serra - ES</p>
                    </div>
                </div>
            </div>
            <!--Criação do local onde serão adicionadas as matérias de interesse do aluno-->
            <div class="available">
                <!--Criação de Título Áreas escolhidas com borda apenas em baixo, margin igual a 3 e texto sempre em maiúsculo-->
                <h3 class="border border-top-0 border-end-0 border-start-0 m-3 text-uppercase">Áreas escolhidas</h3>
                <!--Criação de div para inserir matérias escolhidas pelo usuário com texto centralizado na horizontal, margin igual a 3, itens alinhadas verticalmente e margin botton igual a 4-->
                <div class="available_data row text-center m-3 align-items-center mb-4">
                    <!--Criação de div com cada matéria com borda dark, cantos arredondados e margin igual a 1-->
                    <div class="data col-sm border border-dark rounded m-1">
                        <div class="area">Matemática</div>
                    </div>
                    <div class="data col-sm border border-dark rounded m-1">
                        <div class="area">Machine Learning</div>
                    </div>
                    <div class="data col-sm border border-dark rounded m-1">
                        <div class="area">Música</div>
                    </div>
                    <span class="material-symbols-outlined col-sm m-1" id="addArea">
                        add_circle
                    </span>
                </div>
            </div>
            <!--Criação de div para inserir instrutores favoritados-->
            <div class="projects" id="project">
                <!--Criação de título h3 Instrutores favoritos com borda apenas abaixo, margin igual a 3 e texto sempre em maiúsculo-->
                <h3 class="border border-top-0 border-end-0 border-start-0 m-3 text-uppercase">Instrutores favoritos</h3>
                <!--Criação de local onde ficarão os instrutores favoritados pelos alunos-->
                <!--Criação de carrosel em Bootstrap-->
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!--Criação de primeiro slide-->
                        <div class="carousel-item active">
                            <!--Criação de div com classe row para alinhas as fotos e textos que serão inseridos e margin horizontal igual a 2-->
                            <div class="row mx-2">
                                <!--Inserção de fotos com classe img-fluid para responsividade e col-sm-4 para alinhamento vertical ocupando 4 colunas da linha-->
                                <div class="col-sm-4"><img src="img/Wilsiman.jpg" class="img-fluid" alt="..."><div class="col-sm-10">Wilsiman Evangelista</div></div>
                                <div class="col-sm-4"><img src="img/Nathan.jpg" class="img-fluid" alt="..."><div class="col-sm-10">Nathan Titonelli</div></div>
                                <div class="col-sm-4"><img src="img/Douglas.jpg" class="img-fluid" alt="..."><div class="col-sm-10">Douglas Alkimin</div></div>
                            </div>                            
                        </div>
                        <!--Criação de segundo slide e repetição do processo-->
                        <div class="carousel-item">
                            <div class="row mx-2">
                                <div class="col-sm-4"><img src="img/CarlosLins.jpeg" class="img-fluid" alt="..."><div class="col-sm-10">Carlos Lins</div></div>
                                <div class="col-sm-4"><img src="img/Fabiano.jpeg" class="img-fluid" alt="..."><div class="col-sm-10">Fabiano Ruy</div></div>
                                <div class="col-sm-4"><img src="img/Bermudes.jpg" class="img-fluid" alt="..."><div class="col-sm-10">Alessandro Bermudes</div></div>
                            </div>  
                        </div>
                        <!--Criação de terceiro slide e repetição do processo-->
                        <div class="carousel-item">
                            <div class="row mx-2">
                                <div class="col-sm-4"><img src="img/Scopel.jpg" class="img-fluid" alt="..."><div class="col-sm-10">Wagner Scopel</div></div>
                                <div class="col-sm-4"><img src="img/Renata.jpg" class="img-fluid" alt="..."><div class="col-sm-10">Renata Imaculada</div></div>
                                <div class="col-sm-4"><img src="img/Victorio.jpg" class="img-fluid" alt="..."><div class="col-sm-10">Victorio Albani</div></div>
                            </div>
                        </div>
                    </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
            <!--Criação de botões de edição e para tornar-se instrutor-->
            <div class="buttonsDownloadEdit m-3 mb-4 d-flex" id="buttonsDownloadEdit">        
                <div class="editInformation d-flex border border-dark rounded text-white user-select-none me-2 col-4 justify-content-center text-center" id="editInformation">
                    <span class="material-symbols-outlined mt-2 mb-2 mx-2">edit</span>
                    <p class="textButtonEdit mt-2 mb-2 me-2" id="textButtonEdit">Editar</p>
                </div>
                <div class="editInformation d-flex border border-dark rounded text-white user-select-none col-7 justify-content-center text-center" id="editInformation">
                    <span class="material-symbols-outlined mt-2 mb-2 mx-2">groups_2</span>
                    <p class="textButtonEdit mt-2 mb-2 me-2" id="textButtonEdit"><a class="text-decoration-none text-reset" href="perfilProfBootstrap.php">Quero me tornar um instrutor</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>