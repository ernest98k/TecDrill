<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield("title")</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('vendor/lib/bootstrap/css/bootstrap.min.css ')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('vendor/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Propriedade de Pesquisa</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Pesquisa</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Palavra Chave">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>All Type</option>
                <option>For Rent</option>
                <option>For Sale</option>
                <option>Open House</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">City</label>
              <select class="form-control form-control-lg form-control-a" id="city">
                <option>All City</option>
                <option>Alabama</option>
                <option>Arizona</option>
                <option>California</option>
                <option>Colorado</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Bedrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Garages</label>
              <select class="form-control form-control-lg form-control-a" id="garages">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Bathrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Min Price</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>Unlimite</option>
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Pesquisar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a href="{{route("index")}}"><img src="{{asset('img/logo_tecdrill.png')}}" class="logo_image" alt="Logo"> </a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route("index")}}">Inicio</a><!--active-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route("about")}}">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route("galery")}}">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route("service")}}">Serviços</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{route("recruitment")}}">Recrutamento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route("contact")}}"">Contactos</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->
    @yield('content')
  <!--/ Footer Start /-->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">TecDrill</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
              A Tecdrill é uma empresa que se dedica à produção, reconstrução e comercialização de brocas canhão adaptadas às exigências do mercado atual. 
Comercializamos as ferramentas de corte da marca ZPS-FN e de roscagem da marca BOCCASSINI para Portugal.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Telefone .</span> +351 934 830 708</li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> geral@tecdrill.pt</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">A Empresa</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Mapa do Site</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Outros</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a  href="{{route("opinion")}}">Opiniões</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="{{route("faq")}}">FAQ's</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Inicio</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Sobre</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Serviços</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Loja</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contactos</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
            <br>
              &copy; Copyright
              <span class="color-a">TecDrill</span> All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <link href="{{asset('vendor/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


  <script src="{{asset('vendor/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('vendor/lib/popper/popper.min.js')}}"></script>
  <script src="{{asset('vendor/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('vendor/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('vendor/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('vendor/lib/scrollreveal/scrollreveal.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('vendor/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('vendor/js/main.js')}}"></script>

</body>
</html>
