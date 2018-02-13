@extends(ad.'.index')
@section('admin')

  <a href="{{url(ADMIN.'/donations/create')}}" class=" btn btn-info">{{trans('admin.addnewdonations')}}</a>			

			<div class="row-fluid ">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>{{$title}}</h2>
						
					</div>
					
					<div class="box-content">
					
					<table class="table table-striped table-borderd">
						<tr>
						<th>#</th>
							<th>{{trans('admin.donationname')}}</th>
							<th>{{trans('admin.price')}}</th>
							<th>{{trans('admin.payment_method')}}</th>
							<th>{{trans('admin.creatby')}}</th>
							<th>{{trans('admin.date')}}</th>
							<th>{{trans('admin.office_id')}}</th>
							<th>{{trans('admin.cat_id')}}</th>
							

							<th>{{trans('admin.action')}}</th>

						</tr>
							
							@foreach($all as $donations)

						<tr>
							<td>{{$donations->id}}</td>
							<td>{{$donations->name}}</td>
							<td>{{$donations->price}}.EGP</td>
							<td><?php try { echo $donations->payment_method;} catch(Exception $e) {} ?></td>
							<td><?php try {echo  $donations->user_rel->name;} catch(Exception $e) {}  ?></td>
							<td>{{$donations->date}}</td>
								
							<td><?php try { echo $donations->offices_rel->city;} catch(Exception $e) {} ?></td>
							

							<td><?php try {echo $donations->cat_rel->cat_name;} catch(Exception $e) {} ?></td>

						      @if(auth()->user()->level == 'admin')
			
							<td>
								<a href="{{url(ADMIN.'/donations/'.$donations->id.'/edit')}}" class="btn btn-info">{{trans('admin.edit')}}</a>
								<a href="{{url(ADMIN.'/donations/'.$donations->id.'/del')}}" class="btn btn-danger">{{trans('admin.delete')}}</a>
								<a href="{{url(ADMIN.'/donations/'.$donations->id.'/voacher')}}" class="btn btn-primary">{{trans('admin.voacher')}}</a>


							</td>
							@endif

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