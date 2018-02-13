@extends(ad.'.index')
@section('admin')

  <a href="{{url(ADMIN.'/catogres/create')}}" class=" btn btn-info">{{trans('admin.newcatogres')}}</a>			

			<div class="row-fluid ">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>{{$title}}</h2>
						
					</div>
					
					<div class="box-content">
					
					<table class="table table-striped table-borderd">
						<tr>
						<th>#</th>
							<th>{{trans('admin.namecat')}}</th>
							
					
							<th>{{trans('admin.action')}}</th>
						</tr>
						@foreach($all as $catogres)
						<tr>
							<td>{{$catogres->id}}</td>

							<td>{{$catogres->cat_name}}</td>

							
			
							<td>
								<a href="{{url(ADMIN.'/catogres/'.$catogres->id.'/edit')}}" class="btn btn-info">{{trans('admin.edit')}}</a>
							{!! Form::open(['method'=>'delete','url'=>ADMIN.'/catogres/'.$catogres->id,'style'=>'display:inline'])!!}
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