
@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			<strong><h2>Detalhe da FAQ - {{$faq->id}} </h2></strong>
        </div>
        <div class="card-body" style="font-size: 17px;"><br>

			<div><strong>Questão:</strong> {{$faq->question}}</div><br>
			<div><strong>Resposta:</strong> {{$faq->answer}} </div><br>
		</div>
	</div>
</div>
@endsection
