@extends('layout.admin')

@section("content")
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Recrutamento</h1>


	<div class="card shadow mb-4">
		<div class="card-header py-3">
		</div>
		<div class="card-body">
		@if(count($recruitments))
			<div class="row">
				<div class="col-md-10" style="border:1px solid #dee2e6;">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Nome</th>
									<th>Email</th>
                                    <th>Telefone</th>
                                    <th>Observações</th>
                                    <th>Curriculo</th>
                                    <th>Ações</th>
									
								</tr>
							</thead>
							<tbody>                            
								@foreach($recruitments as $recruitment)
								<tr>
									<td>{{$recruitment->name}}</td>
									<td>{{$recruitment->email}}</td>
                                    <td>{{$recruitment->phone}}</td>
                                    <td>{{$recruitment->observation}}</td>
                                    <td><a class="btn btn-md btn-primary btn-p" href="{{ asset('storage/cv/'.$recruitment->cv.'')}}"><i class="fas fa-eye fa-xs"></i></a></td>
									<td nowrap>
                                    <a class="btn btn-md btn-info btn-p" href="{{asset('mailto:'.$recruitment->email.'?Subject=Recrutamento%20Tecdrill')}}"><i class="far fa-envelope"></i></a>
                                    <form method="POST" action="{{route('recruitments.destroy',$recruitment)}}" role="form" class="inline" onsubmit="return confirm('Tem a certeza de que quer eliminar este recrutamento?');">
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