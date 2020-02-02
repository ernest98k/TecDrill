@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			<strong><h2>Detalhe do Contacto - {{$contact->name}} </h2></strong>
        </div>
        <div class="card-body" style="font-size: 17px;"><br>

			<div><strong>Email:</strong> {{$contact->email}}</div><br>
			<div><strong>Tópico:</strong> {{$contact->topic}} </div><br>
      <div><strong>Mensagem:</strong> {{$contact->message}} </div>
		</div>
	</div>
</div>
@endsection
