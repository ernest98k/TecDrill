@extends("layout.master")
@section("title","Recrutamento")
@section('content')
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">Recrutamento</h1>
                    <span class="color-text-a">Quer juntar à equipa TecDrill? Envie o seu currículo.</span>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route("index")}}">Inicio</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Recrutamento
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="news-single nav-arrow-b">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="news-img-box">
                    <img src="img/slide-about-1.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="form-comments">
                <div class="title-box-d"><br><br><br>
                    <h3 class="title-d"> Formulário</h3>
                </div>
            <form class="form-a" action="{{ action('RecruitmentController@store')}}" method="post" enctype="multipart/form-data">
                   @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="inputName">Nome</label>
                                <input type="text" class="form-control form-control-lg form-control-a" name="name" id="inputName" placeholder="Nome *" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="inputTele">Telemóvel</label>
                                <input type="tel" class="form-control form-control-lg form-control-a" name="phone" id="inputPhone" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" placeholder="Telemóvel *" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control form-control-lg form-control-a" name="email" id="inputEmail" placeholder="Email *" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="inputCv">Curriculum vitae</label>
                                <input type="file" accept=".png,.jpg,.pdf" class="form-control form-control-lg form-control-a" name="cv" id="inputCv"  required>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="textMessage">Observações</label>
                                <textarea id="observation" class="form-control" placeholder="Comenta alguma coisa.." name="observation" cols="45" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-a">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection