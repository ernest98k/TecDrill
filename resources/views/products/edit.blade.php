@extends('layout.admin')

@section('content')

<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h2>Editar Catálogo</h2>
		</div>
		<div class="card-body">

			<form method="POST" action="{{route('products.update',$product)}}" class="form-group" enctype="multipart/form-data">
				@csrf
				@method("PUT")
				@include('products.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>

					<a href="{{route('products.index')}}" class="btn btn-default">Cancelar</a>

				</div>

			</form>

		</div>
	</div>
</div>


@endsection