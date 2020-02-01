@extends('layout.admin')

@section("content")
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Catalogo</h1>


	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a class="btn btn-primary" href="{{route('products.create')}}">
				<i class="fas fa-plus"></i> Adicionar Catalogo</a>
            <br><br>
		</div>
		<div class="card-body">
		@if(count($products))
			<div class="row">
				<div class="col-md-6" style="border:1px solid #dee2e6;">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Nome</th>
									<th>Ações</th>
								</tr>
							</thead>
							<tbody>
								@foreach($products as $product)
								<tr>
									<td>{{$product->name}}</td>
									<td style="white-space:nowrap"
									<div class="row">
										<a class="btn btn-ls btn-primary btn-p; col-xs-2" href="{{route('products.show',$product)}}"><i class="fas fa-eye fa-xs"></i></a>
										<a class="btn btn-ls btn-warning btn-p; col-xs-2" href="{{route('products.edit',$product)}}"><i class="fas fa-pen fa-xs"></i></a>
										<form method="POST" action="{{route('products.destroy',$product)}}" role="form" class="inline" onsubmit="return confirm('Tem a certeza de que quer eliminar este ficheiro?');">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-ls btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
										</form>
									</div>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				@else
			<h6>Sem catalogos</h6>
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