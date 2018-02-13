@extends(ad.'.index')
@section('admin')

  <a href="{{url(ADMIN.'/donations')}}" class=" btn btn-info">{{trans('admin.back')}}</a>			

			<div class="row-fluid ">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>{{$title}}</h2>
						
					</div>
					<div class="box-content">
						{!! Form::open(['class'=>'form-horizontal','route'=>ADMIN.'.donations.store']) !!}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="name">{{trans('admin.donationname')}} </label>
							  <div class="controls">
								<input type="text" value="{{old('name')}}"  name="name" id="name" class="span6" />
								
							  </div>
							</div>
							

														  <div class="control-group">
								<label class="control-label" for="price">{{trans('admin.price')}}</label>
								<div class="controls">
								  <div class="input-prepend input-append">
									<span class="add-on"> £</span>
									<input id="appendedPrependedInput" size="16" type="text" value="{{old('price')}}"  name="price"><span class="add-on">.00</span>
								  </div>
								</div>
							  </div>
						
						
							<div class="control-group">
							  <label class="control-label" for="payment_method">{{trans('admin.payment_method')}} </label>
							  <div class="controls">
								{!! Form::select('payment_method',['cash'=>trans('admin.cash'),'check'=>trans('admin.check')],['class'=>'span6'])!!}
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="office_id">{{trans('admin.office_id')}} </label>
							  <div class="controls">
								{!!Form::select('office_id', $offices,['class'=>'span6']) !!}
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="office_id">{{trans('admin.cat_id')}} </label>
							  <div class="controls">
								{!!Form::select('cat_id', $Catogrey,['class'=>'span6']) !!}
								
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