<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Desenvolvedor</title>
</head>

<body>
    <header class="navbar navbar-expand-lg bg-header fixed-top">
        <div class="col-md-5">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="teste.php">ASZ</a>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0 float-right">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-telephone"> (11) 9 4197-6174</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-whatsapp"> (11) 9 4197-6174</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><button type="button"
                            class="btn btn-outline-warning custom-button">Ligamos pra
                            você</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><button type="button"
                            class="btn btn-outline-warning custom-button2">Agendar consulta</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-instagram fs-4"></i></a>
                </li>
            </ul>
        </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg  mt-5 pt-5 float-right">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav col-md-9">
                    <li class="nav-item ">
                        <a class="nav-link active " aria-current="page" href="index.php">INÍCIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Dev.php">O DESENVOLVEDOR</a>
                    </li>
                    <li class="nav-item">
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        PROCEDIMENTOS
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Cirúrgicos</a></li>
                                        <li><a class="dropdown-item" href="#">Não-Cirúrgicos</a></li>
                                        <li><a class="dropdown-item" href="#">Pequenas Cirúrgicas</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="PerguntasFreq.php"><b>PERGUNTAS
                                FREQUENTES</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="CirurgiaSeg.php">CIRURGIA SEGURA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="FaleConosco.php">FALE CONOSCO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        <b>
            <p class="fs-3 text-center text-warning pb-0 pt-5">Desenvolvimento e criação</p>
        </b>
        <p class="fs-4 text-center">Conheça os tipos de serviços realizados pelo <b>Andreas Zapalá</b></p>
    </div>


    <div class="container pt-5">
        <div class="row d-flex justify-content-around">
            <div class="col-sm-12 col-xl-4 pb-4">
                <div class="card h-100">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cirúrgico</h5>
                            <p class="card-text">Cirurgias plásticas realizadas com o objetivo de melhorar a aparência
                                do paciente,
                                aperfeiçoando algum aspecto físico que não o agrada.</p>
                            <a href="#" class="btn btn-warning w-100">Ver procedimentos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 pb-4">
                <div class="card h-100">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Não-Cirúrgico</h5>
                            <p class="card-text">Procedimentos estéticos relacionados aos cuidados para reduzir os
                                efeitos da passagem
                                do tempo, mantendo a aparência facial jovem e atraente.</p>
                            <a href="#" class="btn btn-warning w-100">Ver procedimentos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 pb-4">
                <div class="card h-100">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Não-Cirúrgico</h5>
                            <p class="card-text">Procedimentos estéticos relacionados aos cuidados para reduzir os
                                efeitos da passagem
                                do tempo, mantendo a aparência facial jovem e atraente.</p>
                            <a href="#" class="btn btn-warning w-100">Ver procedimentos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <hr>

    <div class="container mt-5">
        <div class="row d-flex justify-content-start">
            <div class="col-md-6">
                <!-- Botão para controlar o Collapse -->
                <button class="fs-3 font-color-yellow mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#conteudo">
                    Dúvidas
                </button>
                
                <!-- Conteúdo que será ocultado ou expandido -->
                <div id="conteudo" class="collapse mb-2">
                    <div class="card card-body">
                        Este é o conteúdo oculto do painel. Você pode adicionar qualquer conteúdo aqui, como texto, imagens, links, etc.
                    </div>
                </div>  
                <hr>
                <!-- Botão para controlar o Collapse -->
                <button class="fs-3 font-color-yellow mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#conteudo2">
                    Dúvidas
                </button>
            
                <!-- Conteúdo que será ocultado ou expandido -->
                <div id="conteudo2" class="collapse mb-2">
                    <div class="card card-body">
                        Este é o conteúdo oculto do painel. Você pode adicionar qualquer conteúdo aqui, como texto, imagens, links, etc.
                    </div>
                </div>
                <hr>
                <!-- Botão para controlar o Collapse -->
                <button class="fs-3 font-color-yellow mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#conteudo3">
                    Dúvidas
                </button>
            
                <!-- Conteúdo que será ocultado ou expandido -->
                <div id="conteudo3" class="collapse mb-2">
                    <div class="card card-body">
                        Este é o conteúdo oculto do painel. Você pode adicionar qualquer conteúdo aqui, como texto, imagens, links, etc.
                    </div>
                </div>  
                <hr>
                <!-- Botão para controlar o Collapse -->
                <button class="fs-3 font-color-yellow mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#conteudo4">
                    Dúvidas
                </button>
            
                <!-- Conteúdo que será ocultado ou expandido -->
                <div id="conteudo4" class="collapse mb-2">
                    <div class="card card-body">
                        Este é o conteúdo oculto do painel. Você pode adicionar qualquer conteúdo aqui, como texto, imagens, links, etc.
                    </div>
                </div>
                <hr>
                <!-- Botão para controlar o Collapse -->
                <button class="fs-3 font-color-yellow mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#conteudo5">
                    Dúvidas
                </button>
            
                <!-- Conteúdo que será ocultado ou expandido -->
                <div id="conteudo5" class="collapse mb-2">
                    <div class="card card-body">
                        Este é o conteúdo oculto do painel. Você pode adicionar qualquer conteúdo aqui, como texto, imagens, links, etc.
                    </div>
                </div> 
                <hr>
                <!-- Botão para controlar o Collapse -->
                <button class="fs-3 font-color-yellow mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#conteudo6">
                    Dúvidas
                </button>
            
                <!-- Conteúdo que será ocultado ou expandido -->
                <div id="conteudo6" class="collapse mb-2">
                    <div class="card card-body">
                        Este é o conteúdo oculto do painel. Você pode adicionar qualquer conteúdo aqui, como texto, imagens, links, etc.
                    </div>
                </div>
                <hr>
                <!-- Botão para controlar o Collapse -->
                <button class="fs-3 font-color-yellow mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#conteudo7">
                    Dúvidas
                </button>
            
                <!-- Conteúdo que será ocultado ou expandido -->
                <div id="conteudo7" class="collapse mb-2">
                    <div class="card card-body">
                        Este é o conteúdo oculto do painel. Você pode adicionar qualquer conteúdo aqui, como texto, imagens, links, etc.
                    </div>
                </div>  
                <hr>
                <!-- Botão para controlar o Collapse -->
                <button class="fs-3 font-color-yellow mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#conteudo8">
                    Dúvidas
                </button>
            
                <!-- Conteúdo que será ocultado ou expandido -->
                <div id="conteudo8" class="collapse mb-2">
                    <div class="card card-body">
                        Este é o conteúdo oculto do painel. Você pode adicionar qualquer conteúdo aqui, como texto, imagens, links, etc.
                    </div>
                </div>
                <hr>
                <!-- Botão para controlar o Collapse -->
                <button class="fs-3 font-color-yellow mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#conteudo9">
                    Dúvidas
                </button>
            
                <!-- Conteúdo que será ocultado ou expandido -->
                <div id="conteudo9" class="collapse mb-2">
                    <div class="card card-body">
                        Este é o conteúdo oculto do painel. Você pode adicionar qualquer conteúdo aqui, como texto, imagens, links, etc.
                    </div>
                </div>  
                <hr>
                <!-- Botão para controlar o Collapse -->
                <button class="fs-3 font-color-yellow mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#conteudo10">
                    Dúvidas
                </button>
            
                <!-- Conteúdo que será ocultado ou expandido -->
                <div id="conteudo10" class="collapse mb-2">
                    <div class="card card-body">
                        Este é o conteúdo oculto do painel. Você pode adicionar qualquer conteúdo aqui, como texto, imagens, links, etc.
                    </div>
                </div>    
            </div>
            
            <div class="col-md-6">
                <div class="container">
                    <div class="card p-4 bg-sendDuv">
                        <h3 class="text-center mb-4">Ainda tem dúvidas?</h3>
                        <p class="text-center">Envie suas perguntas para o <strong>Andreas Zapalá</strong></p>
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" placeholder="Seu nome" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" placeholder="Seu e-mail" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" id="phone" placeholder="Seu telefone" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="doubt" rows="3" placeholder="Digite sua dúvida" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn w-100 sendBtn">ENVIAR DÚVIDA</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="container mt-5">
                    <div class="card p-4">
                        
                        <p class="text-center"><b>Solicite uma ligação!</b> Assim que recebermos seu contato, ligaremos para você</p>
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" placeholder="Seu nome *" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" placeholder="Seu e-mail *" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" id="phone" placeholder="Seu telefone *" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn w-100 sendBtn">ENVIAR DÚVIDA</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    
    
    <hr>
    <div class="container mb-4 mt-4">
        <form class="row g-3">
            <div class="col-auto">
                <p class="h3">Assine nossa Newsletter!</p>
                <p class="h5">Receba as novidades do Andreas e mantenha-se informado.</p>
            </div>
            <div class="col-auto">
                <label for="senmail" class="visually-hidden">Digite seu e-mail</label>
                <input type="text" class="form-control" id="sendmail" placeholder="Digite seu e-mail">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Enviar</button>
            </div>
        </form>
    </div>

    <div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.770164464074!2d139.69905551123486!3d35.658033872480374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b563b00109f%3A0x337328def1e2ab26!2zRXN0YcOnw6NvIGRlIFNoaWJ1eWE!5e0!3m2!1spt-BR!2sbr!4v1731869726735!5m2!1spt-BR!2sbr"
            width="100%" height="460" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="container  pl-5">
        <p class="fs-3 text-start text-warning mt-4">Estação Shibuya</p>
        <p>Tel.: (11) 94197-6174</p>
        <p>R. 246 - Tamagawa-dori,</p>
        <p>Japão - JP</p>
        <a href="#"><button type="button" class="btn btn-outline-warning">Traçar rota ></button></a>
    </div>
    <footer>
        <hr>
        <div class="text-center mb-3">
            <span>2024 - Andreas Sales Zapalá</span>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>