@extends(ad.'.index')
@section('admin')

			
			

			<div class="row-fluid">
				
				<table class="table table-striped table-borderd ">
				<tr>
					<td>{{trans('admin.donationname')}}/{{$print->name}}</td></tr>
					<tr><td>{{trans('admin.price')}}/{{$print->price}}</td></tr>
					<tr><td>{{trans('admin.date')}}/{{$print->date}}</td></tr>
				<tr><td>{{trans('admin.payment_method')}}/{{$print->payment_method}}</td></tr>
					

				

				</table>
				
			</div>		

			

@endsection
@stop