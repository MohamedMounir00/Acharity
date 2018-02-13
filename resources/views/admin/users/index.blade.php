@extends(ad.'.index')
@section('admin')

  <a href="{{url(ADMIN.'/users/create')}}" class=" btn btn-info">{{trans('admin.newusers')}}</a>			

			<div class="row-fluid ">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>{{$title}}</h2>
						
					</div>
					
					<div class="box-content">
					
					<table class="table table-striped table-borderd">
						<tr>
						<th>#</th>
							<th>{{trans('admin.username')}}</th>
							<th>{{trans('admin.email')}}</th>
							<th>{{trans('admin.country')}}</th>
							<th>{{trans('admin.mobile_1')}}</th>
							<th>{{trans('admin.mobile_2')}}</th>
							<th>{{trans('admin.digree')}}</th>
							<th>{{trans('admin.office_id')}}</th>
							

							<th>{{trans('admin.action')}}</th>
						</tr>
						@foreach($all as $users)
						<tr>
							<td>{{$users->id}}</td>
							<td>{{$users->name}}</td>
							<td>{{$users->email}}</td>
							<td>{{$users->country}}</td>
							<td>{{$users->mobile_1}}</td>
							<td>{{$users->mobile_2}}</td>
							<td>{{$users->digree}}</td>
							<td>{{$users->officess_rel->city}}</td>

							
			
							<td>
								<a href="{{url(ADMIN.'/users/'.$users->id.'/edit')}}" class="btn btn-info">{{trans('admin.edit')}}</a>
							{!! Form::open(['method'=>'delete','url'=>ADMIN.'/users/'.$users->id,'style'=>'display:inline'])!!}
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