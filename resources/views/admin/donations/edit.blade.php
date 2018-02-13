@extends(ad.'.index')
@section('admin')

  <a href="{{url(ADMIN.'/donations')}}" class=" btn btn-info">{{trans('admin.back')}}</a>			

			<div class="row-fluid ">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>{{$title}}</h2>
						
					</div>
					<div class="box-content">
						{!! Form::open(['class'=>'form-horizontal','url'=>ADMIN.'/donations/'.$edit->id,'method'=>'put']) !!}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="name">{{trans('admin.donationname')}} </label>
							  <div class="controls">
								<input type="text" value="{{$edit->name}}"  name="name" id="name" class="span6" />
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="price">{{trans('admin.price')}} </label>
							  <div class="controls">
								<input type="text" value="{{$edit->price}}"  name="price" id="price" class="span6" />
								
							  </div>
							</div>
						
						
							<div class="control-group">
							  <label class="control-label" for="payment_method">{{trans('admin.payment_method')}} </label>
							  <div class="controls">
								{!! Form::select('payment_method',['cash'=>trans('admin.cash'),'check'=>trans('admin.check')],$edit->payment_method,['class'=>'span6'])!!}
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="office_id">{{trans('admin.office_id')}} </label>
							  <div class="controls">
								{!!Form::select('office_id', $offices,$edit->office_id,['class'=>'span6']) !!}
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="cat_id">{{trans('admin.cat_id')}} </label>
							  <div class="controls">
								{!!Form::select('cat_id', $Catogrey,$edit->cat_id,['class'=>'span6']) !!}
								
							  </div>
							</div>

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
							  <button type="submit" class="btn btn-primary">{{trans('admin.add')}}</button>
							  
							</div>
						  </fieldset>
						{!! Form::close() !!}  

					</div>
				</div><!--/span-->

			</div><!--/row-->
				

			

@endsection
@stop