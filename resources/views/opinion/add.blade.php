@extends('opinion')


@section('formulario')

<form class="form-a" method="POST" action="{{route('opinion.store')}}" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-md-6 mb-3">
      <div class="form-group">
        <label for="inputName">Nome Completo</label>
        <input type="text" class="form-control form-control-lg form-control-a" id="inputName" placeholder="Nome Completo *" value="{{old('name',$opinion ?? ''->name)}}" required>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <div class="form-group">
        <label for="inputEmail1">Email</label>
        <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1" placeholder="Email *" value="{{old('email',$opinion ?? ''->email)}}" required>
      </div>
    </div>
    <div class="col-md-12 mb-3">
      <div class="form-group">
        <label for="textMessage">Opinião</label>
        <textarea id="textMessage" class="form-control" placeholder="Deixe aqui a sua opinião *" name="message" cols="45" rows="8" value="{{old('opinion',$opinion ?? ''->opinion)}}" required>


        </textarea>
      </div>
    </div>
    <div class="col-md-12">
      <center><button type="submit" class="btn btn-a">Enviar </button></center>
    </div>
  </div>
</form>

@endsection
