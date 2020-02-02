
@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			<strong><h2>Detalhe da Opinião - {{$opinion->id}} </h2></strong>
        </div>
        <div class="card-body" style="font-size: 17px;"><br>

			<div><strong>Nome:</strong> {{$opinion->name}}</div><br>
			<div><strong>Email:</strong> {{$opinion->email}} </div><br>
      <div><strong>Opinião:</strong> {{$opinion->opinion}} </div>
		</div>
	</div>
</div>
@endsection
