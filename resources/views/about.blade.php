@extends("layout.master")

@section('content')
<!--/ Nav Star /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Quem somos nós ?</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{route("index")}}">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Sobre
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ About Star /-->
  <section class="section-about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-img-box">
            <img src="img/tec4.jpg" alt="" class="img-fluid">
          </div>
          <div class="sinse-box">
            <h3 class="sinse-title">TecDrill
              <span></span>
              <br> Desde 2017</h3>
            <p>Produção & Reconstrução</p>
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="row">
            <div class="col-md-6 col-lg-5">
              <img src="img/placa_tec.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-2  d-none d-lg-block">
            </div>
            <div class="col-md-6 col-lg-5 section-md-t3">
              <div class="title-box-d">
                <h3 class="title-d">Quem
                  <span class="color-d">somos</span>?</h3>
              </div>
              <p class="color-text-a">
              A Tecdrill é uma empresa que se dedica à produção, reconstrução e comercialização de brocas canhão adaptadas às exigências do mercado atual. 
              Comercializamos as ferramentas de corte da marca ZPS-FN e de roscagem da marca BOCCASSINI para Portugal.
              </p>
              <div class="title-box-d">
                <h3 class="title-d">O que
                  <span class="color-d">fazemos</span>?</h3>
              </div>
              <p class="color-text-a">
                Produzimos essencialmente brocas canhão normais, revestidas e de ponteira extra-longa com diâmetros variáveis também produzimos brocas canhão com pastilha intercambíavel e afiamos.
                Atuamos também no serviço de reconstrução das brocas saiba mais na nossa página de Serviços.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ About End /-->


@endsection