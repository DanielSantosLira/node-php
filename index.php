<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Mercado Preso</title>
  <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
  <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">

</head>

<body>
  <!-- inicio do navbar -->
  <nav class="navbar navbar-expand-lg  bg-gradient-dange">

    <div class="container">

      <a class="navbar-brand " href="#"><img src="img/logo.png" alt="" width="70px"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar-Site">

        <ul class="navbar-nav mr-auto">

          <li class="navbar-item">
            <a href="#" class="nav-link text-dark">Inicio</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="nav-link text-dark">Perfil</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="nav-link text-dark">Serviços</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="nav-link text-dark">Depoimentos</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="nav-link text-dark">Contatos</a>
          </li>

        </ul>

        <ul class="navbar-nav ml-auto ">
          <li class="navbar-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" id="navDrop">Social</a>

            <div class="dropdown-menu bg-white ">
              <a href="#" class="dropdown-item"><img src="icon/facebook.svg" alt=""> Fecebook</a>
              <a href="#" class="dropdown-item"><img src="icon/twitter.svg" alt=""> Twitter</a>
              <a href="#" class="dropdown-item"><img src="icon/instagram.svg" alt=""> Instagran</a>
              <a href="#" class="dropdown-item"><img src="icon/youtube.svg" alt=""> YouTube</a>
            </div>
          </li>

        </ul>

        <form action="" class="form-inline">
          <input type="search" placeholder="Buscar..." class="form-control ml-4 mr-2">
          <button class="btn btn-light" type="Submit">Ok</button>
        </form>
      </div>

    </div>
  </nav>
  <!-- Fim do navbar -->

  <!-- Incicio do Carousel -->
  <div id="carouselSite" class="carousel slide bg-primary " data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="carouselSite" data-slide-to="0" class="active"></li>

      <li data-target="carouselSite" data-slide-to="1"></li>

      <li data-target="carouselSite" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner">

      <div class="carousel-item active">

        <img src="img/celular.png" alt="" class="img-fluid d-block">
      </div>

      <div class="carousel-item">
        <img src="img/roupa.png" alt="" class="img-fluid d-block ">
      
      </div>

      <div class="carousel-item">
        <img src="img/celular.png" alt="" class="img-fluid d-block">
       
      </div>
    </div>

    <a href="#carouselSite" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="sr-only">Anterior</span>
    </a>

    <a href="#carouselSite" class="carousel-control-next" role="button" data-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="sr-only">Avançar</span>
    </a>

  </div>
  <!-- fim do Carousel -->

  <!-- Inicio do card -->
  <div class="container">

    <div class="row">

      <div class="col-12 text-center my-5">
        <h1 class="display-3"><i class="fa fa-cogs text-primary" aria-hidden="true"></i> SEJA BEM VINDO</h1>
        <p>AQUI COMEÇA SUAS EMOÇÕES</p>
      </div>

    </div>


    <div class="row mb-5 ">

      <div class="col-sm-6 col-md-4 mb-3">

        <nav id="navbarVertical" class="navbar navbar-light bg-light ">

          <nav class="nav nav-pills flex-column">

            <a href="#item1" class="nav-link ">New assets </a>

            <nav class="nav nav-pills flex-column ">
              <a href="#item1-1" class="nav-link ml-3 ">Graphic Templates</a>
              <a href="#item1-2" class="nav-link ml-3">Stock Photos</a>
            </nav>

            <a href="#item2" class="nav-link my-2">Created </a>

            <a href="#item3" class="nav-link my-2">Save money </a>

            <nav class="nav nav-pills flex-column">
              <a href="#item3-1" class="nav-link ml-3">Save time</a>
              <a href="#item3-2" class="nav-link ml-3">Video Templates</a>
            </nav>

          </nav>

        </nav>
      </div>

      <div class="col-sm-6 col-md-8">

        <div data-spy="scroll" data-target="#navbarVertical" data-offset="0" class="scrollspySite">

          <h4 id="item1">Premium quality</h4>
          <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text
            used in laying out print, graphic or web designs. The passage is
            Malorum for use in a type specimen book.</p>

          <h5 id="item1-1">Unlimited downloads</h5>
          <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text
            used in laying out print, graphic or web designs. The passage is
            attributed to an unknown typesetter It usually begins with.</p>

          <h5 id="item1-2">Simple licensing</h5>
          <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text
            used in laying out print, graphic or web designs. The passage is
            attributed to an unknown typesette It usually begins with.</p>

          <h4 id="item2">Premium quality</h4>
          <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text
            used in laying out print, graphic or web designs. The passage is
            attributed to an unknown typesetter in the 15th century who is thought to
            It usually begins with.</p>

          <h4 id="item3">Unlimited downloads</h4>
          <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text
            used in laying out print, graphic or web designs. The passage is
            attributed to an unknown typesetter in the 15th century who is thought to
            It usually begins with.</p>

          <h5 id="item3-1">Unlimited downloads</h5>
          <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text
            used in laying out print, graphic or web designs. The passage is
            attributed to an unknown typesetter in the 15th century who is thought to
            It usually begins with.</p>

          <h5 id="item3-2">Simple licensing</h5>
          <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text
            used in laying out print, graphic or web designs. The passage is
            attributed to an unknown typesetter in the 15th century who is thought to
            It usually begins with</p>
        </div>

      </div>
    </div>

    <div class="row justify-content-sm-center ">

      <div class="col-sm-6 col-md-4">

        <div class="card mb-5">

          <img class="card-img-top" src="img/celular.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Save time</h4>
            <h6 class="card-subtitle mb-2 text-muted">Stock Photos</h6>
            <p class="card-text">Lorem ipsum, or lipsum as it is sometimes known, is dummy text
              .</p>
          </div>

          <ul class="list-group list-group-flush">
            <li class="list-group-item">Tipos de letra</li>
            <li class="list-group-item">Mais famoso</li>
            <li class="list-group-item">Espaço reservado</li>
          </ul>

          <div class="card-body">
            <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">Curiosidade</a>
            <a href="#" class="card-link">Saiba-mais</a>

          </div>

          <div class="card-footer text-muted">
            © 2018 - 2023 LOREM IPZUM
          </div>

        </div>

      </div>

      <div class="col-sm-6 col-md-4">

        <div class="card mb-5">

          <img class="card-img-top" src="img/roupa.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Graphic Templates</h4>
            <h6 class="card-subtitle mb-2 text-muted">Video Templates</h6>
            <p class="card-text">Lorem ipsum, or lipsum as it is sometimes known, is dummy text
              .</p>
          </div>

          <ul class="list-group list-group-flush ">
            <li class="list-group-item">Tipos de letra</li>
            <li class="list-group-item">Mais famoso</li>
            <li class="list-group-item">Espaço reservado</li>
          </ul>

          <div class="card-body">
            <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">Curiosidade</a>
            <a href="#" class="card-link">Saiba-mais</a>
          </div>

          <div class="card-footer text-muted">
            © 2018 - 2023 LOREM IPZUM
          </div>

        </div>
      </div>

      <div class="col-sm-6 col-md-4">

        <div class="card mb-5">
          <img class="card-img-top" src="img/roupa.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Save time</h4>
            <h6 class="card-subtitle mb-2 text-muted">type specimen book</h6>
            <p class="card-text">Lorem ipsum, or lipsum as it is sometimes known, is dummy text
              .</p>
          </div>

          <ul class="list-group list-group-flush">
            <li class="list-group-item">Tipos de letra</li>
            <li class="list-group-item">Mais famoso</li>
            <li class="list-group-item">Espaço reservado</li>
          </ul>


          <div class="card-body">
            <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">Curiosidade</a>
            <a href="#" class="card-link">Saiba-mais</a>

          </div>

          <div class="card-footer text-muted">
            © 2018 - 2023 LOREM IPZUM
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- fim do Card -->

  <!-- Incicio do Jombontron -->
  <div class="jumbotron jumbotron-fluid">

    <div class="container">

      <div class="row">

        <div class="col-12 text-center">

          <h1 class="display-4"><i class="fa fa-video-camera text-primary " aria-hidden="true"></i> Porque nós o usamos</h1>
          <p class="lead">Lorem Ipsum é simplesmente uma
            simulação de texto da indústria tipográfica e
            de impressos, e vem sendo utilizado desde o século
            XVI, quando um impressor desconhecido pegou uma bandeja
            de tipos e os embaralhou
          </p>
          <hr>

        </div>
      </div>

      <div class="row">
        <div class="col-12">

          <ul class="nav nav-pills justify-content-center mb-4" id="pills-nav" role="tablist">

            <li class="nav-item">
              <a class="nav-link active " id="nav-pills-01" data-toggle="pill" href="#nav-item-01">Pellentesque</a>
            </li>

            <li class="nav-item">
              <a class="nav-link  " id="nav-pills-02" data-toggle="pill" href="#nav-item-02">Onde posso conseguí-lo</a>
            </li>

            <li class="nav-item">
              <a class="nav-link  " id="nav-pills-03" data-toggle="pill" href="#nav-item-03">De onde ele vem</a>
            </li>

          </ul>

          <div class="tab-content" id="nav-pills-content">

            <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">

              <div class="row">

                <div class="col-sm-6">
                  <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Ld2ikv9fExs"></iframe>
                  </div>
                </div>

                <div class="col-sm-6">
                  <p>Lorem Ipsum é simplesmente uma simulação de texto da
                    indústria tipográfica e de impressos, e vem sendo utilizado
                    desde o século XVI, quando um impressor desconhecido pegou
                    uma bandeja de tipos e os embaralhou para fazer um livro de
                    modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos,
                    como também ao salto para a editoração eletrônica, permanecendo
                    essencialmente inalterado.
                  </p>
                </div>

              </div>

            </div>

            <div class="tab-pane fade" id="nav-item-02" role="tabpanel">
              <div class="row">

                <div class="col-sm-6">
                  <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/P8Crk1w7p5g"></iframe>
                  </div>
                </div>

                <div class="col-sm-6">
                  <p>Lorem Ipsum é simplesmente uma simulação de texto da
                    indústria tipográfica e de impressos, e vem sendo utilizado
                    desde o século XVI, quando um impressor desconhecido pegou
                    uma bandeja de tipos e os embaralhou para fazer um livro de
                    modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos,
                    como também ao salto para a editoração eletrônica, permanecendo
                    essencialmente inalterado.
                  </p>
                </div>

              </div>

            </div>

            <div class="tab-pane fade" id="nav-item-03" role="tabpanel">
              <div class="row">

                <div class="col-sm-6">
                  <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fq_C6k5lulY"></iframe>
                  </div>
                </div>

                <div class="col-sm-6">
                  <p>Lorem Ipsum é simplesmente uma simulação de texto da
                    indústria tipográfica e de impressos, e vem sendo utilizado
                    desde o século XVI, quando um impressor desconhecido pegou
                    uma bandeja de tipos e os embaralhou para fazer um livro de
                    modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos,
                    como também ao salto para a editoração eletrônica, permanecendo
                    essencialmente inalterado.
                  </p>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- Fim do Jombontron -->

  <!--Inicio Formulário -->
  <div class="container">
    <div class="row">

    </div>
    <div class="col-12 text-center my-5">
      <h1 class="display-4"><i class="fa fa-paper-plane text-primary" aria-hidden="true"></i>Cadastre-se</h1>
    </div>

    <div class="row justify-content-center mb-5">

      <div class="col-sm-12 col-md-10 col-lg-8">
        <form>
          <div class="form-row">
            <div class="form-group col-sm-6">
              <label for="inputNome">Nome</label>
              <input type="text" class="form-control" id="inputNome" placeholder="Digite seu Nome" required>
            </div>

            <div class="form-group col-sm-6">
              <label for="inputSobrenome">Sobrenome</label>
              <input type="text" class="form-control" id="inputNome" placeholder="Digite seu Sobrenome" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-sm-3">
              <label for="inputRg">RG</label>
              <input type="number" class="form-control" id="inputRg" placeholder="Digite seu RG" maxlength="13" required>

            </div>
            <div class="form-group col-sm-3">
              <label for="inputCPF">CPF</label>
              <input type="number" class="form-control" id="inputCPF" placeholder="Digite seu CPF" maxlength="13" required>

            </div>
            <div class="form-group col-sm-3">
              <label for="inputDate">Data de Nacimento</label>
              <input type="date" class="form-control" id="inputDate" placeholder="" required>
            </div>

          </div>

          <div class="form-row">

            <div class="form-group col-sm-6">
              <label for="inputEnd">Endereço</label>
              <input type="text" class="form-control" id="inputEnd" placeholder="Digite seu Enderço" required>
            </div>

            <div class="form-group col-sm-2">
              <label for="inputNum">Número</label>
              <input type="number" class="form-control" id="inputNum" placeholder="Nº" required>
            </div>

            <div class="form-group col-sm-6">
              <label for="inputEmail">E-mail</label>
              <input type="text" class="form-control" id="inputEmail" placeholder="Digite seu E-mail" required>
            </div>

            <div class="form-group col-sm-6">
              <label for="inputCof">Conferme E-mail</label>
              <input type="text" class="form-control" id="inputEmail" placeholder="Comfirme seu E-mail" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-sm-4">

              <label for="inputTel">Telefone</label>
              <input type="number" class="form-control" id="inputTel" placeholder="(xx) xxxx-xxxx" required>

            </div>
            <div class="form-group col-sm-4">

              <label for="inputCel">Celular</label>
              <input type="number" class="form-control" id="inputCel" placeholder="(xx) xxxxx-xxxx" required>

            </div>

          </div>

          <div class="form-row">

            <div class="form-group col-sm-3">
              <label for="inputCidade">Cidade</label>
              <input type="text" class="form-control" id="inputCidade" placeholder="Digite a Cidade" required>
            </div>

            <div class="for-group col-sm-3">
              <label for="inputEst">Estado</label>
              <select name="" id="inputEst" class="form-control">
                <option value="" selected>Escolha</option>
                <option value="SP">São paulo</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="MG">Minas Gereais</option>
              </select>
            </div>

            <div class="for-group col-sm-3">

              <label for="inputCEP">CEP</label>
              <input type="text" class="form-control" id="inputCEP" placeholder="Digite seu CEP" required>

            </div>

          </div>

          <div class="form-row">

            <div class="for-group col-sm-12  mt-2">

              <div class="form-check ">

                <label for="" class="form-check-label">
                  <input type="checkbox" class="form-check-input"> Desejo receber novidades por e-mail
                </label>

              </div>

            </div>

          </div>

          <div class="form-row">
            <div class="for-group col-sm-12  mt-2">
              <button type="submit" class="btn btn-primary">Enviar</button>
              <a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" data-placement="right" trigger="focus" title="Precisa de ajuda" data-content=" O que podemos lhe ajudar">Ajuda</a>
            </div>
          </div>

        </form>
      </div>

    </div>
    <!--Fim Formulário -->

    <!-- inicio do Rodapé -->
    <div class="row">
      <div class="col-12 mb-3">
        <hr>
      </div>

      <div class="col-sm-4">
        <a class="navbar-brand " href="#"><img src="img/logo.png" alt="" width="70px"></a>
        <h3>Faça a suas compras</h3>
        <p>Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão.
          Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando um
          impressor desconhecido pegou uma galera de tipos e os embaralhou para fazer um livro de
          espécimes de tipos.
        </p>
      </div>

      <div class="col-sm-4">
        <h3>Menu</h3>
        <div class="list-group text-center">
          <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Perfil</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Serviço</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Depoimento</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Contatos</a>
        </div>
      </div>

      <div class="col-sm-4">

        <h3>Social</h3>
        <div class="btn-group-vertical btn-block btn-group-lg" role="group">
          <a href="#" class="btn btn-outline-primary"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>
          <a href="#" class="btn btn-outline-info"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</a>
          <a href="#" class="btn btn-outline-warning"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
          <a href="#" class="btn btn-outline-danger"><i class="fa fa-youtube" aria-hidden="true"></i> YouTube</a>
        </div>

      </div>

      <div class="col-12 mt-5">
        <blockquote class="blockquote text-center">
          <h4 class="mb-0">O sucesso não é garantido,
            mas o fracasso é certo se voçê não estiver
            emocionalmente envolvido em seu trabalho.
          </h4>
          <footer class="blockquote-footer">Biz Stone <cite title="Titulo">Fundado do Twitter</cite></footer>
        </blockquote>
      </div>
    </div>

  </div>

  <!--Icicio Modal -->
  <div class="modal fade" id="siteModal" tabindex="-1" role="dialg">

    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">De onde ele vem</h5>
          <button type="button" class="close" data-dismiss="modal"></button>
          <span>&times;</span>
        </div>

        <div class="modal-body">
          <div class="container-fluid">

            <div class="row">

              <div class="col-6">
                <h5>Lorem Ipsum</h5>
                <p>Lorem Ipsum é simplesmente uma simulação
                  de texto da indústria tipográfica e de impressos,
                  e vem sendo utilizado desde o século XVI, quando
                  um impressor desconhecido pegou uma bandeja de tipos
                  e os embaralhou para fazer um livro de modelos de tipos.
                  Lorem Ipsum sobreviveu não só a cinco séculos, como também
                  ao salto para a editoração eletrônica, permanecendo essencialmente
                  inalterado. Se popularizou na década de 60, quando a Letraset lançou
                  decalques contendo passagens de Lorem Ipsum, e mais recentemente quando
                  passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
              </div>
              <div class="col-6">
                <h5>Lorem Ipsum</h5>
                <p>Lorem Ipsum é simplesmente uma simulação
                  de texto da indústria tipográfica e de impressos,
                  e vem sendo utilizado desde o século XVI, quando
                  um impressor desconhecido pegou uma bandeja de tipos
                  e os embaralhou para fazer um livro de modelos de tipos.
                  Lorem Ipsum sobreviveu não só a cinco séculos, como também
                  ao salto para a editoração eletrônica, permanecendo essencialmente
                  inalterado. Se popularizou na década de 60, quando a Letraset lançou
                  decalques contendo passagens de Lorem Ipsum, e mais recentemente quando
                  passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Feixar</button>
        </div>

      </div>
    </div>
  </div>
  <!--Fim Modal -->

  <script src="node_modules/jquery/dist/jquery.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

  <script>
    $(function() {
      $('[data-toggle="popover"]').popover()

    });
  </script>


</body>

</html>