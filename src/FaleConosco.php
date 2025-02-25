<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="CSS/style.css">
  <title>Fale Conosco</title>
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
          <a class="nav-link" href="#"><button type="button" class="btn btn-outline-warning custom-button">Ligamos pra
              você</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><button type="button" class="btn btn-outline-warning custom-button2">Agendar
              consulta</button></a>
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
            <a class="nav-link active " aria-current="page" href="/index.php">INÍCIO</a>
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
            <a class="nav-link active" aria-current="page" href="FaleConosco.php"><b>FALE CONOSCO</b></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div>
    <b>
      <p class="fs-3 text-center text-warning pt-4">Fale Conosco
    </b>
  </div>
  <div>
    <p class="fs-5 text-center text-warning pt-4">Estamos prontos para oferecer o melhor tratamento para você</p>
  </div>

  <div class="container d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow" style="width: 100%; max-width: 800px;">
      <h3 class="text-center mb-4 mt-4 font-color-yellow">Deixe sua mensangem</h3>
      <form class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Assunto*</label>
          <br>
          <select class="form-select w-100" placeholder="Assunto">
            <option selected>Selecione o assunto desejado*</option>
            <option value="1">Sugestões</option>
            <option value="2">Tire suas dúvidas</option>
            <option value="3">Secretária</option>
            <option value="4">Financeiro</option>
            <option value="5">Outros</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Nome*</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Nome Completo">
        </div>
        <div class="col-6 mt-1">
          <label for="inputAddress" class="form-label">E-mail*</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="email@email.com">
        </div>
        <div class="col-6 mt-1">
          <label for="inputAddress2" class="form-label">Telefone*</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="(00) 00000-0000">
        </div>

        <div class="form-floating col-12 mt-3">
          <label for="inputAddress2" class="form-label p-3">Mensagem*</label>
          <textarea class="form-control" placeholder="Escreva sua mensagem aqui" id="floatingTextarea2"
            style="height: 100px"></textarea>
        </div>
        <div class="col-6 mt-3">
          * campos obrigatórios
        </div>
        <div class="col-6 mt-4 mb-4 text-end">
          <button type="submit" class="btn btn-primary w-25">Enviar</button>
        </div>
      </form>
    </div>
  </div>
  <hr>
  <div class="container mb-4 mt-4">
      <form class="row g-3" action="/NewsLetter.php" method="POST">
        <div class="col-auto">
          <p class="h3">Assine nossa Newsletter!</p>
          <p class="h5">Receba as novidades do Andreas e mantenha-se informado.</p>
        </div>
        <div class="col-auto">
          <label for="senmail" class="visually-hidden">Digite seu e-mail</label>
          <input type="email" class="form-control"  id="email" name="email" placeholder="Digite seu e-mail">
        </div>
        <div class="col-md-3 mb-2">
          <button type="submit" class="btn btn-primary mb-3">Enviar</button>
        </div>
      </div>
      </form>
    </div>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="src\JS\script.js"></script>
</body>
</html>