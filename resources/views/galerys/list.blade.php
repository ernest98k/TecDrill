@extends('layout.admin')

@section("content")
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Galeria</h1>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a class="btn btn-primary" href="{{route('galerys.create')}}">
				<i class="fas fa-plus"></i> Adicionar Imagens</a>
            <br><br>
		</div>
		<div class="card-body">
		@if(count($galerys))
			<div class="row">
				<div class="col-md-10" style="border:1px solid #dee2e6;">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Nome</th>
									<th>Descrição</th>
									<th>Ações</th>
								</tr>
							</thead>
							<tbody>
								@foreach($galerys as $galery)
								<tr>
									<td>{{$galery->title}}</td>
									<td>{{$galery->description}}</td>
									<td nowrap>
										<a class="btn btn-ls btn-warning btn-p" href="{{route('galerys.edit',$galery)}}"><i class="fas fa-pen fa-xs"></i></a>
										<form method="POST" action="{{route('galerys.destroy',$galery)}}" role="form" class="inline" onsubmit="return confirm('Tem a certeza de que quer eliminar esta imagem?');">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-ls btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				@else
			<h6>No users registered</h6>
			@endif
			</div>
			
		</div>
	</div>
</div>

@endsection

@section("moreScripts")
<script>
	$('#dataTable').dataTable({
		destroy: true,
		"bFilter": false,
		"order": [
			[1, 'asc']
		],
		"columns": [{
				"orderable": false
			},
			null,
			null,
			null,
			{
				"orderable": false
			}
		]
	});
</script>
@endsection