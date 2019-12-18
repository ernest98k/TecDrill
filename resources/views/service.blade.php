@extends("layout.master")

@section('content')

  <!--/ Intro Single star /-->
  <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Estes são os nossos serviços.</h1>
              <span class="color-text-a"></span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route("index")}}">Inicio</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Serviços
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Services Star /-->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Nossos Serviços</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="fa fa-cogs"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Produção</h2>
                </div>
              </div>
              <!-- <div class="card-body-c">
                <p class="content-c">
                  Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                  convallis a pellentesque
                  nec, egestas non nisi.
                </p>
              </div> -->
              <div class="card-footer-c">
                <a href="#" class="link-c link-icon" data-toggle="modal" data-target="#modalprod">Ver mais
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>

          <!-- Modal -->
  <div class="modal fade" id="modalprod" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title">Produção</h4>
        </div>
        <div class="modal-body">
          <ul>
            <li><b>Produção de Brocas canhão (normais / ponteira extra-longa / revestidas) </b> - Dimensões: d[8,10,11,12,14,15,19]mm com L[250-1700]mm</li>
            <li></b>Produção de Brocas canhão com diâmetros variáveis </b> - Dimensões: d[6-19]mm com L[250-1700]mm</li>
            <li><b>Produção de Brocas canhão com pastilha intercambiável </b> - Dimensões: d[12,14,15,19 e 20]mm com L[250-1700]mm</li>
            <li><b>Produção de Brocas canhão com pastilhas intercambiáveis </b> - Dimensões: d[12-20]mm com L[250-1800]mm</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <!-- End Modal -->



          <div class="col-md-5">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="fa fa-wrench"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Reconstrução</h2>
                </div>
              </div>
              <!-- <div class="card-body-c">
                <p class="content-c">
                  Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Mauris blandit
                  aliquet elit, eget tincidunt
                  nibh pulvinar a.
                </p>
              </div> -->
              <div class="card-footer-c">
                <a href="#" class="link-c link-icon" data-toggle="modal" data-target="#modalrecon">Ver mais
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>

          <!-- Modal -->
  <div class="modal fade" id="modalrecon" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title">Reconstrução</h4>
        </div>
        <div class="modal-body">
          <ul>
            <li><b>Reconstrução de Brocas canhão (normais / ponteira extra-longa / revestidas) </b> - Dimensões: d[6-21]mm com comprimentos até 2500mm</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <!-- End Modal -->


          <div class="col-md-1"></div>
        </div>
        <br>
        <br>
        <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-5">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="fa fa-adjust"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Afiamentos</h2>
                </div>
              </div>
              <!-- <div class="card-body-c">
                <p class="content-c">
                  Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                  convallis a pellentesque
                  nec, egestas non nisi.
                </p>
              </div> -->
              <div class="card-footer-c">
                <a href="#" class="link-c link-icon" data-toggle="modal" data-target="#modalafia">Ver mais
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
          </div>
        </div>
      </div>

      <!-- Modal -->
<div class="modal fade" id="modalafia" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
      <h4 class="modal-title">Afiamentos</h4>
    </div>
    <div class="modal-body">
      <ul>
        <li><b>Afiamentos de  Brocas canhão</b> - Dimensões: d[3-40]mm</li>
      </ul>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>

</div>
</div>
<!-- End Modal -->
    </section>
    <!--/ Services End /-->

@endsection
