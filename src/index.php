
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="CSS/style.css">
  <title>Título da Página</title>
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
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 float-right">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-telephone"> (11) 9 4197-6174</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-whatsapp"> (11) 9 4197-6174</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><button type="button" class="btn btn-outline-warning custom-button">Ligamos pra
              você</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><button type="button" class="btn btn-outline-warning custom-button2">Agendar consulta</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-instagram fs-4"></i></a>
        </li>
      </ul>
    </div>
    </div>
  </header>

  <nav class="navbar navbar-expand-lg bg-body-tertiary mt-5 pt-5">
    <div class="container-fluid">
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav col-md-9">
          <li class="nav-item ">
            <a class="nav-link active " aria-current="page" href="index.php"><b>INÍCIO</b></a>
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
            <a class="nav-link active" aria-current="page" href="PerguntasFreq.php">PERGUNTAS FREQUENTES</a>
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



  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="IMG/foto1.jpg" class="d-block" alt="...">
      </div>
      <div class="carousel-item">
        <img src="IMG/foto2.jpg" class="d-block" alt="...">
      </div>
      <div class="carousel-item">
        <img src="IMG/foto3.jpg" class="d-block" alt="...">
      </div>
      <div class="carousel-item">
        <img src="IMG/foto4.jpg" class="d-block" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div>
    <b>
      <p class="fs-3 text-center text-warning pb-0 pt-5">Cirurgia Plástiva natural, muito além da estética</p>
    </b>
    <p class="fs-4 text-center">Conheça os tipos de procedimentos realizados pelo <b>Dr. Mário Junqueira</b></p>
  </div>


  <div class="container pt-5">
    <div class="row d-flex justify-content-around">
      <div class="col-sm-12 col-xl-4 pb-4">
        <div class="card h-100">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Cirúrgico</h5>
              <p class="card-text">Cirurgias plásticas realizadas com o objetivo de melhorar a aparência do paciente,
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
              <p class="card-text">Procedimentos estéticos relacionados aos cuidados para reduzir os efeitos da passagem
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
              <p class="card-text">Procedimentos estéticos relacionados aos cuidados para reduzir os efeitos da passagem
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

  <div>
    <b>
      <p class="fs-3 text-center text-warning pt-4">Procedimentos em destaque</p>
    </b>
  </div>

  <div class="container pt-5">
    <div class="row d-flex justify-content-around">
      <div class="col-sm-12 col-xl-4 pb-4">
        <div class="card h-100">
          <img src="IMG/foto5.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <div class="pt-3 pl-3">
              <span class="border border-black rounded ">Cirúrgico</span>
            </div>
            <h5 class="card-title">Abdominoplastia</h5>
            <p class="card-text">A Abdominoplastia é indicada para pacientes que apresentam flacidez e excesso de pele
              na região do abdômen, geralmente associados à obesidade e gravidez. A técnica pode ser associada à
              lipoaspiração para retirar a gordura das partes lateral e superior do abdômen.</p>
            <div>
              <div class="pb-2">
                <a href="#" class="btn btn-outline-warning w-100">Agendar consulta</a>
              </div>
              <div>
                <a href="#" class="btn btn-warning w-100">Ver procedimento</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-xl-4 pb-4">
        <div class="card h-100">
          <img src="IMG/foto5.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <div class="mt-3 pl-3">
              <span class="border border-black rounded ">Cirúrgico</span>
            </div>
            <h5 class="card-title">Lipoaspiração</h5>
            <p class="card-text">Lipoaspiração é a cirurgia de retirada de gordura corporal de áreas localizadas através
              de cânulas especialmente desenhadas para isso. O procedimento é indicado para pacientes com gordura
              localizada não generalizada e as regiões tratadas na cirurgia de lipoaspiração são abdômen, flancos,
              dorso, culotes, coxas, braços, pescoço e tórax.</p>
            <div>
              <div class="mb-2">
                <a href="#" class="btn btn-outline-warning w-100">Agendar consulta</a>
              </div>
              <div>
                <a href="#" class="btn btn-warning w-100">Ver procedimento</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-xl-4 mb-4">
        <div class="card h-100">
          <img src="IMG/foto5.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <div class="mt-3 pl-3">
              <span class="border border-black rounded ">Cirúrgico</span>
            </div>
            <h5 class="card-title">Rinoplastia</h5>
            <p class="card-text">Rinoplastia é a cirurgia indicada para remodelar, diminuir, aumentar ou mudar a forma
              do nariz e corrigir alterações provocadas por lesões. O procedimento ajuda a conquistar um ângulo mais
              natural entre nariz e lábio superior e corrigir assimetrias ou desvios.</p>
            <div>
              <div class="mb-2">
                <a href="#" class="btn btn-outline-warning w-100">Agendar consulta</a>
              </div>
              <div>
                <a href="#" class="btn btn-warning w-100">Ver procedimento</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="row d-flex justify-content-around">
      <div class="col-sm-12 col-xl-4 mb-4">
        <div class="card h-100">
          <img src="IMG/foto5.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <div class="mt-3 pl-3">
              <span class="border border-black rounded ">Cirúrgico</span>
            </div>
            <h5 class="card-title">Abdominoplastia</h5>
            <p class="card-text">A Abdominoplastia é indicada para pacientes que apresentam flacidez e excesso de pele
              na região do abdômen, geralmente associados à obesidade e gravidez. A técnica pode ser associada à
              lipoaspiração para retirar a gordura das partes lateral e superior do abdômen.</p>
            <div>
              <div class="mb-2">
                <a href="#" class="btn btn-outline-warning w-100">Agendar consulta</a>
              </div>
              <div>
                <a href="#" class="btn btn-warning w-100">Ver procedimento</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-xl-4 mb-4">
        <div class="card h-100">
          <img src="IMG/foto5.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <div class="mt-3 pl-3">
              <span class="border border-black rounded ">Cirúrgico</span>
            </div>
            <h5 class="card-title">Lipoaspiração</h5>
            <p class="card-text">Lipoaspiração é a cirurgia de retirada de gordura corporal de áreas localizadas através
              de cânulas especialmente desenhadas para isso. O procedimento é indicado para pacientes com gordura
              localizada não generalizada e as regiões tratadas na cirurgia de lipoaspiração são abdômen, flancos,
              dorso, culotes, coxas, braços, pescoço e tórax.</p>
            <div>
              <div class="mb-2">
                <a href="#" class="btn btn-outline-warning w-100">Agendar consulta</a>
              </div>
              <div>
                <a href="#" class="btn btn-warning w-100">Ver procedimento</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-xl-4 mb-4">
        <div class="card h-100">
          <img src="IMG/foto5.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <div class="mt-3 pl-3">
              <span class="border border-black rounded ">Cirúrgico</span>
            </div>
            <h5 class="card-title">Rinoplastia</h5>
            <p class="card-text">Rinoplastia é a cirurgia indicada para remodelar, diminuir, aumentar ou mudar a forma
              do nariz e corrigir alterações provocadas por lesões. O procedimento ajuda a conquistar um ângulo mais
              natural entre nariz e lábio superior e corrigir assimetrias ou desvios.</p>
            <div>
              <div class="mb-2">
                <a href="#" class="btn btn-outline-warning w-100">Agendar consulta</a>
              </div>
              <div>
                <a href="#" class="btn btn-warning w-100">Ver procedimento</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-warning">
    <div class="row justify-content-around">
      <div class="col-md-5 col-sm-12">
        <div class="p-4">
          <h2>Andreas Sales Zapaalá</h2>
          <p>Desenvolvedor iniciante fazendo projetos para ganhar experiência.</p>
          <p><a class="link-secondary link-underline-opacity-0" href="#">Traçar rotas <i
                class="bi bi-chevron-right"></i></a></p>
        </div>
      </div>
      <div class="col-md-7 col-sm-12">
        <div class="h-100">
          <img src="IMG/foto6.jpg" alt="Imagem de exemplo" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <div class="container mb-4 mt-4">
    <div class="row h4">
      <div class="col-md-7 col-sm-12">
        Agende agora para orçar um site com o <b>Andreas Zapalá</b>
      </div>
      <div class="col-md-5 col-sm-12 mb-2">
        <a href="#"><button type="button" class="btn btn-outline-warning">Agendar</button></a>
      </div>
    </div>
  </div>

  <div class="bg-warning">
    <div class="row justify-content-around">
      <div class="col-md-5 col-sm-12">
        <div class="p-4">
          <h2>Andreas Sales Zapaalá</h2>
          <p>Desenvolvedor iniciante fazendo projetos para ganhar experiência.</p>
          <p><a class="link-secondary link-underline-opacity-0" href="#">Traçar rotas <i
                class="bi bi-chevron-right"></i></a></p>
        </div>
      </div>
      <div class="col-md-7 col-sm-12">
        <div class="h-100">
          <img src="IMG/foto6.jpg" alt="Imagem de exemplo" class="img-fluid">
        </div>
      </div>
    </div>
  </div>



  <div class="container mb-4 mt-4">
    <div class="row">
      <div class="col-md-4">Agende agora para orçar um site com o <b>Andreas Zapalá</b></div>
      <div class="col-md-2">
        <div class="form-group mb-2">
          <input type="text" class="form-control border-warning bg-light" id="inputPassword2" placeholder="Nome">
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group mb-2">
          <input type="text" class="form-control border-warning bg-light" id="inputPassword2" placeholder="E-mail">
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group mb-2">
          <input type="text" class="form-control border-warning bg-light" id="inputPassword2" placeholder="Celular">
        </div>
      </div>

      <div class="col-md-2">
        <a href="#"><button type="button" class="btn btn-outline-warning">Enviar</button></a>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="right col-md-6">
        <div class="h5 text-warning">
          Pensamos em você
        </div>
        <div class="h2 text-warning">
          Cirurgia Segura
        </div>
        <div class="mb-3">
          Cirurgia Segura é uma cobertura para atender intercorrências cirúrgicas e eventuais complicações pré e
          pós-operatórias em casos de cirurgia plástica. Além disso, envolve a estrutura hospitalar adequada para o
          atendimento, recuperação e reestabelecimento do paciente. Ela é fundamental quando há necessidade de novos
          procedimentos ou condutas terapêuticas e deve ser contratada antes da internação para o procedimento
          cirúrgico.
        </div>
        <div class="h5">
          Despesas médicas e hospitalares cobertas:
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <ul style="list-style-type: none">
                <li><i class="bi bi-check2"></i> Diárias Hospitalares</li>
                <li><i class="bi bi-check2"></i> Novas Cirurgias</li>
                <li><i class="bi bi-check2"></i> Hospitais UTI</li>
                <li><i class="bi bi-check2"></i> Oxigênio e sua aplicação</li>
                <li><i class="bi bi-check2"></i> Ultrassônico e de ressonância magnética</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul style="list-style-type: none">
                <li><i class="bi bi-check2"></i> Tratamento Fisioterapêutico</li>
                <li><i class="bi bi-check2"></i> Exames Laboratoriais</li>
                <li><i class="bi bi-check2"></i> Transfusão Sangínea</li>
                <li><i class="bi bi-check2"></i> Exames de Diagnósticos por imagem</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="h5">
          Diferencias
        </div>

        <div>
          <ul style="list-style-type: none">
            <li><li><i class="bi bi-check2"></i> Uso de Cola Cirúrgica</li>
            <li><li><i class="bi bi-check2"></i> Melhores fios de sutura PDS</li>
          </ul>
        </div>
        <div>
          <p>Para mais informações,<a class="text-warning link-underline link-underline-opacity-0" href="#"> <b>entre em
                contato com nossa equipe.</b></a> </p>
        </div>
      </div>
    </div>
  </div>

  <div>
    <p class="fs-3 text-center text-warning mt-4">Artigos e notícias sobre Cirurgia Plástica</p>
  </div>

  <div class="container mt-5">
    <div class="row d-flex justify-content-around">
      <div class="col-sm-12 col-xl-4 mb-4">
        <div class="card h-100">
          <img src="IMG/foto5.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <div class="mt-3 ml-3">
              <span class="border border-black rounded ">Cirúrgico</span>
            </div>
            <h5 class="card-title">Abdominoplastia</h5>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-xl-4 mb-4">
        <div class="card h-100">
          <img src="IMG/foto5.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <div class="mt-3 ml-3">
              <span class="border border-black rounded ">Cirúrgico</span>
            </div>
            <h5 class="card-title">Lipoaspiração</h5>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-xl-4 mb-4">
        <div class="card h-100">
          <img src="IMG/foto5.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <div class="mt-3 ml-3">
              <span class="border border-black rounded ">Cirúrgico</span>
            </div>
            <h5 class="card-title">Rinoplastia</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

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
        <div class="col-md-3 mb-2">
          <button type="submit" class="btn btn-primary mb-3">Enviar</button>
        </div>
      </div>
    </div>
  </div>
  <br>

  

    <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.770164464074!2d139.69905551123486!3d35.658033872480374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b563b00109f%3A0x337328def1e2ab26!2zRXN0YcOnw6NvIGRlIFNoaWJ1eWE!5e0!3m2!1spt-BR!2sbr!4v1731869726735!5m2!1spt-BR!2sbr" width="100%" height="460"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
  <div class="container  pl-5">
    <p class="fs-3 text-start text-warning mt-4">Estação Shibuya</p>
    <p>Tel.: (11) 94197-6174</p>
    <p>R. 246 - Tamagawa-dori,</p>
    <p>Japão - JP</p>
    <p><a class="link-warning link-underline-opacity-0" href="#">Traçar rotas <i class="bi bi-chevron-right"></i></a>
    </p>
  </div>
  <footer>
    <hr>
    <div class="text-center mb-3">
      <span>2024 - Andreas Sales Zapalá</span>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>