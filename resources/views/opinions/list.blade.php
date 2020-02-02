@extends('layout.admin')

@section("content")
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Opiniões</h1><br>


	<div class="card shadow mb-4">
		<div class="card-body">
		@if(count($opinions))
			<div class="row">
				<div class="col-md-10" style="border:1px solid #dee2e6;">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 17px;">
							<thead>
								<tr>
									<th>Nome</th>
									<th>Email</th>
									<th>Opinião</th>
                  <th>Ver</th>
                  <th>Eliminar</th>
								</tr>
							</thead>
							<tbody>
								@foreach($opinions as $opinion)
								<tr>
									<td>{{$opinion->name}}</td>
									<td>{{$opinion->email}}</td>
									<td>{{$opinion->opinion}}</td>
									<td nowrap>
										<a class="btn btn-xs btn-primary btn-p" href="{{route('opinions.show',$opinion)}}"><i class="fas fa-eye fa-xs"></i></a></td>

                    <td><form method="POST" action="{{route('opinions.destroy',$opinion)}}" role="form" class="inline"  onsubmit="return confirm('Tem a certeza de que quer eliminar esta Opinião?');">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-xs btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
										</form>

									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				@else
			<h6>Nao Tem Opiniões Registadas</h6>
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
