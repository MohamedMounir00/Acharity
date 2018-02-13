@extends(ad.'.index')
@section('admin')

  <a href="{{url(ADMIN.'/order_cat/create')}}" class=" btn btn-info">{{trans('admin.newcatogres')}}</a>			

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

							<td>{{$catogres->name}}</td>

							
			
							<td>
								<a href="{{url(ADMIN.'/order_cat/'.$catogres->id.'/edit')}}" class="btn btn-info">{{trans('admin.edit')}}</a>
							{!! Form::open(['method'=>'delete','url'=>ADMIN.'/order_cat/'.$catogres->id,'style'=>'display:inline','class'=>'form'.$catogres->id])!!}
								{!! Form::submit(trans('admin.delete'),['class'=>'btn btn-danger delete_this','formid'=>'$catogres'])!!}
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