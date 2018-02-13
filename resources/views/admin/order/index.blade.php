@extends(ad.'.index')
@section('admin')

  <a href="{{url(ADMIN.'/order/create')}}" class=" btn btn-info">{{trans('admin.neworders')}}</a>			

			<div class="row-fluid ">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>{{$title}}</h2>
						
					</div>
					
					<div class="box-content">
					
					<table class="table table-striped table-borderd">
						<tr>
						<th>#</th>
							<th>{{trans('admin.title')}}</th>
							
							<th>{{trans('admin.content')}}</th>
							<th>{{trans('admin.creatby')}}</th>
							<th>{{trans('admin.cat_id')}}</th>
					
							<th>{{trans('admin.action')}}</th>
							<th>{{trans('admin.ststus')}}</th>
						</tr>
						@foreach($all as $order)
						<tr>
							<td>{{$order->id}}</td>

							<td>{{$order->title}}</td>
							<td>{{$order->content}}</td>

							<td><?php try { echo $order->user_rel->name; } catch(Exception $e) {} ?></td>
							<td><?php try { echo $order->catord_rel->name; } catch(Exception $e) {} ?></td>
							<td>{{$order->status}}</td>
							

							
			
							<td>
								<a href="{{url(ADMIN.'/order/'.$order->id.'/edit')}}" class="btn btn-info">{{trans('admin.edit')}}</a>
							{!! Form::open(['method'=>'delete','url'=>ADMIN.'/order/'.$order->id,'style'=>'display:inline'])!!}
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