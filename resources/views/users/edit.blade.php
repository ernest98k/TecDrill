@extends('layout.admin')

@section('content')

<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Editar Utilizador
		</div>
		<div class="card-body">

			<form method="POST" action="{{route('users.update',$user)}}" class="form-group" enctype="multipart/form-data">
				@csrf
				@method("PUT")
				@include('users.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>

					<a href="{{route('users.index')}}" class="btn btn-default">Cancelar</a>

				</div>

			</form>

		</div>
	</div>
</div>


@endsection