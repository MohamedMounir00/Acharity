@extends(ad.'.index')
@section('admin')

  <a href="{{url(ADMIN.'/donations')}}" class=" btn btn-info">{{trans('admin.back')}}</a>			

			<div class="row-fluid ">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>{{$title}}</h2>
						
					</div>
					<div class="box-content">
						{!! Form::open(['class'=>'form-horizontal','url'=>ADMIN.'/donations/'.$edit->id.'/del']) !!}
						  <fieldset>
							

							<div class="control-group hidden-phone">
							  <label class="control-label" for="reason">{{trans('admin.reason')}}</label>
							  <div class="controls">
								<textarea  name="reason" class="cleditor" id="reason" rows="3"></textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="order_id">{{trans('admin.order_id')}} </label>
							  <div class="controls">
								{!!Form::select('order_id', $orders,['class'=>'span6']) !!}
								
							  </div>
							</div>
							
							
							

							
							
						
							<div class="form-actions">
							  <button type="submit" class="btn btn-danger">{{trans('admin.delete')}}</button>
							  
							</div>
						  </fieldset>
						{!! Form::close() !!}  

					</div>
				</div><!--/span-->

			</div><!--/row-->
				

			

@endsection
@stop
