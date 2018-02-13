@extends(ad.'.index')
@section('admin')

  <a href="{{url(ADMIN.'/offices/create')}}" class=" btn btn-info">{{trans('admin.newoffices')}}</a>			

			<div class="row-fluid ">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>{{$title}}</h2>
						
					</div>
					
					<div class="box-content">
					
					<table class="table table-striped table-borderd">
						<tr>
						<th>#</th>
							<th>{{trans('admin.country')}}</th>
							<th>{{trans('admin.city')}}</th>
							<th>{{trans('admin.address')}}</th>
							<th>{{trans('admin.emploee')}}</th>
					
							<th>{{trans('admin.action')}}</th>
						</tr>
						@foreach($all as $offices)
						<tr>
							<td>{{$offices->id}}</td>

							<td>{{$offices->country}}</td>
							<td>{{$offices->city}}</td>

							<td>{{$offices->address}}</td>
							<td>
								<ul>
								@foreach($offices->users_rel as $emp)
									<li>
										{{$emp->name}}
									</li>
									@endforeach

								</ul>


							</td>


							
			
							<td>
								<a href="{{url(ADMIN.'/offices/'.$offices->id.'/edit')}}" class="btn btn-info">{{trans('admin.edit')}}</a>
							{!! Form::open(['method'=>'delete','url'=>ADMIN.'/offices/'.$offices->id,'style'=>'display:inline'])!!}
								{!! Form::submit(trans('admin.delete'),['class'=>'btn btn-danger'])!!}
								{!! Form::close() !!}

							</td>

						</tr>
						@endforeach

					</table>
					<hr/>
					<div class="pagination">
					{!!str_replace('/?','?',$all->render())!!}
					</div>
					</div>
					</div>
					</div>	

			

@endsection
@stop