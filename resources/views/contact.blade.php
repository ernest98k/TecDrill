@extends("layout.master")

@section('content')
<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Venha conhecer-nos!</h1>
            <span class="color-text-a">Contacte-nos para mais informações</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{route("index")}}">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Contactos
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Contact Star /-->
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-map box">
            <div id="map" class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d640.9994701890843!2d-8.77219567081144!3d39.757338898715446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2273b8ca5814ff%3A0x2e3852eb1e48a927!2s2420-349%20Santa%20Euf%C3%A9mia!5e1!3m2!1spt-PT!2spt!4v1575398265674!5m2!1spt-PT!2spt" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
        <div class="col-sm-12 section-t8">
          <div class="row">
            <div class="col-md-7">
              <form class="form-a" action="{{ action('ContactController@store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Nome Completo" data-rule="minlen:4" data-msg="Por favor insira pelo menos 4 caracteres">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Email" data-rule="email" data-msg="Por favor insira um e-mail correto">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="topic" class="form-control form-control-lg form-control-a" placeholder="Tópico" data-rule="minlen:4" data-msg="Por favor digite pelo menos 8 caracteres">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <textarea name="message" class="form-control" name="message" cols="45" rows="8" data-rule="required" data-msg="Por favor escreva-nos algo" placeholder="Mensagem"></textarea>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-a">Enviar Mensagem</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-paper-plane"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Contactos</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">Email.
                      <span class="color-a">geral@tecdrill.pt</span>
                    </p>
                    <p class="mb-1">Telefone.
                      <span class="color-a">+351 934 830 708</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-pin"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Localização
                    </h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">
                    Rua casal da Azeiteira, Pavilhão n.º 8 
                    <br>Z. Ind. da Azeiteira - Quintas do Sirol
                      <br> 2420-349 Leiria - Portugal
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box">
                <div class="icon-box-icon">
                  <span class="ion-ios-redo"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Redes Sociais</h4>
                  </div>
                  <div class="icon-box-content">
                    <div class="socials-footer">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Contact End /-->
@endsection