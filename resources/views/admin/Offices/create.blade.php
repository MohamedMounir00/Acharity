@extends(ad.'.index')
@section('admin')

  <a href="{{url(ADMIN.'/offices')}}" class=" btn btn-info">{{trans('admin.back')}}</a>			

			<div class="row-fluid ">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>{{$title}}</h2>
						
					</div>
					<div class="box-content">
						{!! Form::open(['class'=>'form-horizontal','route'=>ADMIN.'.offices.store']) !!}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="country">{{trans('admin.country')}} </label>
							  <div class="controls">
								<input type="text" value="{{old('country')}}"  name="country" id="country" class="span6" />
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="city">{{trans('admin.city')}} </label>
							  <div class="controls">
								<input type="text" value="{{old('city')}}"  name="city" id="city" class="span6" />
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="address">{{trans('admin.address')}} </label>
							  <div class="controls">
								<input type="text" value="{{old('address')}}"  name="address" id="address" class="span6" />
								
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