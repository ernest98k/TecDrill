@extends('layout.admin')

@section("content")
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">FAQ's</h1><br>

  <div class="card-header py-3">
    <a class="btn btn-primary" href="{{route('faqs.create')}}">
      <i class="fas fa-plus"></i> Adicionar Uma FAQ
    </a>
  </div>

  <br>

	<div class="card shadow mb-4">
		<div class="card-body">
		@if(count($faqs))
			<div class="row">
				<div class="col-md-10" style="border:1px solid #dee2e6;">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 17px;" style="text-align: center;">
							<thead>
								<tr>
									<th>Questão</th>
									<th>Resposta</th>
                  <th>Ver</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
								</tr>
							</thead>
							<tbody>
								@foreach($faqs as $faq)
								<tr>
									<td>{{$faq->question}}</td>
									<td>{{$faq->answer}}</td>
									<td nowrap>
										<a class="btn btn-xs btn-primary btn-p" href="{{route('faqs.show',$faq)}}"><i class="fas fa-eye fa-xs"></i></a></td>
                    <td><a class="btn btn-xs btn-warning btn-p" href="{{route('faqs.edit',$faq)}}"><i class="fas fa-pen fa-xs"></i></a></td>
                    <td><form method="POST" action="{{route('faqs.destroy',$faq)}}" role="form" class="inline"  onsubmit="return confirm('Tem a certeza de que quer eliminar esta FAQ?');">
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
			<h6>Nao Tem Faqs Registadas</h6>
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
