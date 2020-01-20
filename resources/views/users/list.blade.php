@extends('layout.admin')

@section("content")
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Utilizadores</h1>


	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a class="btn btn-primary" href="{{route('users.create')}}">
				<i class="fas fa-plus"></i>Adicionar Utilizadores</a>
            <br><br>
		</div>
		<div class="card-body">
		@if(count($users))
			<div class="row">
				<div class="col-md-10" style="border:1px solid #dee2e6;">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Nome</th>
									<th>Email</th>
									<th>Função</th>
									<th>Ações</th>
								</tr>
							</thead>
							<tbody>
								@foreach($users as $user)
								<tr>
									<td>{{$user->name}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->roleToStr()}}</td>
									<td nowrap>
										<a class="btn btn-xs btn-primary btn-p" href="{{route('users.show',$user)}}"><i class="fas fa-eye fa-xs"></i></a>
										<a class="btn btn-xs btn-warning btn-p" href="{{route('users.edit',$user)}}"><i class="fas fa-pen fa-xs"></i></a>
										<form method="POST" action="{{route('users.destroy',$user)}}" role="form" class="inline" onsubmit="return confirm('Tem a certeza de que quer eliminar este utilizador?');">
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