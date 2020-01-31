@extends("layout.master")
@section("title","Opiniões")
@section('content')

<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Opiniões</h1>
          <span class="color-text-a">Deixe a sua opinião no formulário</span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Inicio</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Opiniões
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->

<!--/ News Single Star /-->
<section class="news-single nav-arrow-b">
  <div class="container">
    <div class="row">

<div class="col-sm-6">
      <div class="form-comments">
        <div class="title-box-d"><br><br>
          <h3 class="title-d"> Formulário</h3>
        </div>

        <form class="form-a" method="POST" action="{{route('opinion.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label for="inputName">Nome Completo</label>
                <input type="text" class="form-control form-control-lg form-control-a" name="name" id="inputName" placeholder="Nome Completo *" required>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label for="inputEmail1">Email</label>
                <input type="email" class="form-control form-control-lg form-control-a" name="email" id="inputEmail1" placeholder="Email *"  required>
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <label for="textMessage">Opinião</label>
                <textarea id="textMessage" class="form-control" placeholder="Deixe aqui a sua opinião *" name="opinion" cols="45" rows="8"  required></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <center><button type="submit" class="btn btn-a">Enviar </button></center>
            </div>
          </div>
        </form>

      </div>

      <br>

      </div>

      <div class="col-sm-6">
        <div class="news-img-box"><br><br><br><br><br><br><br>
          <img src="img/conversa.jpg" alt="" class="img-fluid">
        </div>
        </div>

      <!-- <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1"> -->
        <div class="title-box-d"><br><br>
          <h3 class="title-d">Opiniões dos nossos clientes (3)</h3>
        </div>
        <div class="col-sm-12">
        <div class="box-comments">

          <ul class="list-comments">
            <li>
              <!-- <div class="comment-avatar">
                <img src="img/img1.jpg" alt="">
              </div>

               -->

                @if(count($opinions))

                <div class="comment-details" style="text-align: center;">
                  @foreach ($opinions as $opinion)
                  <h4 class="comment-author">{{$opinion->name}}</h4>
                  <span>{{$opinion->email}}</span>
                  <p class="comment-description">{{$opinion->opinion}}</p><hr><br>
                  @endforeach
                </div>

                @else
                <h6>Não Existe Opiniões Registadas</h6>
                @endif



            </li>
          </ul>
</div>
        </div>
      <!-- </div> -->
    </div>
  </div>
</section>



@endsection
