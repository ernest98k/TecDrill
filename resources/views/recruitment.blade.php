@extends("layout.master")
@section("title","Recrutamento")
@section('content')
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1">
                <div class="form-comments">
                    <div class="title-box-d">
                        <h3 class="title-d"> Recrutamento</h3>
                    </div>
                    <form class="form-a">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="inputName">Nome</label>
                                    <input type="text" class="form-control form-control-lg form-control-a" id="inputName" placeholder="Name *" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="inputTele">Telemóvel</label>
                                    <input type="number" class="form-control form-control-lg form-control-a" id="inputTelemovel" placeholder="Telemóvel *" required>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail" placeholder="Email *">
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="textMessage">Observações</label>
                                    <textarea id="textMessage" class="form-control" placeholder="Comenta alguma coisa.." name="message" cols="45" rows="5" required></textarea>
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