
@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3"><br><br><br>
			Informação do Utilizador
        </div>
        <div class="card-body">       
			<div><strong>Nome:</strong> {{$user->name}} </div>
            <div><strong>Email:</strong> {{$user->email}} </div>
            <div><strong>Função:</strong> {{$user->role}} </div>
		</div>
	</div>
</div>
@endsection