@extends('layout.admin')


@section('content')

<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<strong><h3>Adicionar Uma FAQ</h3></strong>
		</div>
		<div class="card-body">

			<form method="POST" action="{{route('faqs.store')}}" class="form-group">
			    @csrf
				@include('faqs.partials.add-edit')

				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Adicionar</button>
					<a href="{{route('faqs.index')}}" class="btn btn-default">Cancelar</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
