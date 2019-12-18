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
                <a href="#">Inicio</a>
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
                  <div class="card-box-ico">
                    <span class="ion-money">$</span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c">15000</h5>
                  </div>
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Quick Summary</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>Property ID:</strong>
                      <span>1134</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Location:</strong>
                      <span>Chicago, IL 606543</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Property Type:</strong>
                      <span>House</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Status:</strong>
                      <span>Sale</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Area:</strong>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Beds:</strong>
                      <span>4</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Baths:</strong>
                      <span>2</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Garage:</strong>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Property Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                  Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                  neque, auctor sit amet
                  aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.
                  Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt
                  nibh pulvinar quam id dui posuere blandit.
                </p>
                <p class="description color-text-a no-margin">
                  Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
                  malesuada. Quisque velit nisi,
                  pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                </p>
              </div>
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
                  <li><a href="{{ asset('/Brocas_fresas_catalogo.pdf') }}">Brocas Fresas - Catálogo</a></li>
                  <li><a href="{{ asset('/Machos_Catalogo.pdf') }}">Machos - Catálogo e Preçário</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property Single End /-->

@endsection