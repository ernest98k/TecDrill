@extends("layout.master")

@section('content')


 <!--/ Property Single Star /-->~

 
<section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">O Nosso Catálogo</h1>
            <span class="color-text-a">Catálogo</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{route("index")}}">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Catálogo
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

 <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                </div>
              </div>
              <div class="property-summary">
                <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Produção Própria</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="list- no-margin">
                  <li><a href="{{ asset('/brocas_canhaoCP.pdf') }}">Brocas Canhão - Catálogo e Preçário</a></li>
                </ul>
              </div>
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Representações</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="list- no-margin">
                  <li><a href="{{ asset('/Brocas_fresas_catalogo.pdf') }}">Brocas Fresas - Catálogo</a></li><br>
                  <li><a href="{{ asset('/Machos_Catalogo.pdf') }}">Machos - Catálogo e Preçário</a></li>
                </ul>
              </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Serviços</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
              <strong>Produção de Brocas canhão (normais / ponteira extra-longa / revestidas):</strong><br>
              <span> Dimensões: d[8,10,11,12,14,15,19]mm com L[250-1700]mm </span><br><br>
              <strong>Produção de Brocas canhão com diâmetros variáveis:</strong><br>
              <span> Dimensões: d[6-19]mm com L[250-1700]mm </span><br><br>
              <strong>Produção de Brocas canhão com pastilha intercambiável:</strong><br>
              <span>Dimensões: d[12,14,15,19 e 20]mm com L[250-1700]mm </span><br><br>
              <strong>Reconstrução de Brocas canhão (normais / ponteira extra-longa / revestidas):</strong><br>
              <span>Dimensões: d[6-21]mm com comprimentos até 2500mm</span><br><br>
              <strong> Afiamentos de  Brocas canhão:</strong><br>
              <span>Dimensões: d[3-40]mm</span><br><br>
              <strong> Produção de Brocas canhão com pastilhas intercambiáveis:</strong><br>
              <span>Dimensões: d[12-20]mm com L[250-1800]mm</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property Single End /-->

@endsection