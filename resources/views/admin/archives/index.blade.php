@extends(ad.'.index')
@section('admin')

 		

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
							

							<th>{{trans('admin.oredr_id')}}</th>
						</tr>
							
							@foreach($all as $archives)

						<tr>
							<td>{{$archives->id}}</td>
							<td>{{$archives->name}}</td>
							<td>{{$archives->price}}</td>
							<td>{{$archives->payment_method}}</td>
							<td><?php try {echo  $archives->user_rel->name;} catch(Exception $e) {} ?> </td>
							<td>{{$archives->date}}</td>
								
							<td><?php try  {echo $archives->offices_rel->city;} catch(Exception $e) {} ?></td>
							

							<td><?php try { echo $archives->cat_rel->cat_name;}catch(Exception $e) {} ?> </td>
							<td> <?php try{ echo $archives->order_rell->title;} catch(Exception $e) {} ?> </td>

						
			

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