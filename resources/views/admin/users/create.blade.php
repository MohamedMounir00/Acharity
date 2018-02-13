@extends(ad.'.index')
@section('admin')

  <a href="{{url(ADMIN.'/users')}}" class=" btn btn-info">{{trans('admin.back')}}</a>			

			<div class="row-fluid ">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>{{$title}}</h2>
						
					</div>
					<div class="box-content">
						{!! Form::open(['class'=>'form-horizontal','route'=>ADMIN.'.users.store']) !!}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="username">{{trans('admin.username')}} </label>
							  <div class="controls">
								<input type="text" value="{{old('name')}}"  name="name" id="username" class="span6" />
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="email">{{trans('admin.email')}} </label>
							  <div class="controls">
								<input type="text" value="{{old('email')}}"  name="email" id="email" class="span6" />
								
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="password">{{trans('admin.password')}} </label>
							  <div class="controls">
								<input type="password"   name="password" id="password" class="span6" />
								
							  </div>
							</div>
							
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
							
							<div class="control-group">
							  <label class="control-label" for="pesonal_id">{{trans('admin.pesonal_id')}} </label>
							  <div class="controls">
								<input type="text" value="{{old('pesonal_id')}}"  name="pesonal_id" id="pesonal_id" class="span6" />
								
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="mobile_1">{{trans('admin.mobile_1')}} </label>
							  <div class="controls">
								<input type="text" value="{{old('mobile_1')}}"  name="mobile_1" id="mobile_1" class="span6" />
								
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="mobile_2">{{trans('admin.mobile_2')}} </label>
							  <div class="controls">
								<input type="text" value="{{old('mobile_2')}}"  name="mobile_2" id="mobile_2" class="span6" />
								
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="digree">{{trans('admin.digree')}} </label>
							  <div class="controls">
								<input type="text" value="{{old('digree')}}"  name="digree" id="digree" class="span6" />
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="sitemanger">{{trans('admin.sitemanger')}} </label>
							  <div class="controls">
								{!! Form::select('level',['admin'=>trans('admin.admin'),'user'=>trans('admin.user')],['class'=>'span6'])!!}
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="office_id">{{trans('admin.office_id')}} </label>
							  <div class="controls">
								{!!Form::select('office_id', $offices,['class'=>'span6']) !!}
								
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