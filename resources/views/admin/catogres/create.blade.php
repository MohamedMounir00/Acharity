@extends(ad.'.index')
@section('admin')

  <a href="{{url(ADMIN.'/catogres')}}" class=" btn btn-info">{{trans('admin.back')}}</a>			

			<div class="row-fluid ">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>{{$title}}</h2>
						
					</div>
					<div class="box-content">
						{!! Form::open(['class'=>'form-horizontal','route'=>ADMIN.'.catogres.store']) !!}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="namecat">{{trans('admin.namecat')}} </label>
							  <div class="controls">
								<input type="text" value="{{old('cat_name')}}"  name="cat_name" id="cat_name" class="span6" />
								
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