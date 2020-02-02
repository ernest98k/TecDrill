@extends('layout.admin')

@section('content')

<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h2>Editar Imagem</h2>
		</div>
		<div class="card-body">

			<form method="POST" action="{{route('galerys.update',$galery)}}" class="form-group" enctype="multipart/form-data">
				@csrf
				@method("PUT")
				@include('galerys.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>

					<a href="{{route('galerys.index')}}" class="btn btn-default">Cancelar</a>

				</div>

			</form>

		</div>
	</div>
</div>


@endsection