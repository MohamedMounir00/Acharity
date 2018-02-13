@extends(ad.'.index')
@section('admin')

  <a href="{{url(ADMIN.'/offices')}}" class=" btn btn-info">{{trans('admin.back')}}</a>			

			<div class="row-fluid ">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>{{$title}}</h2>
						
					</div>
					<div class="box-content">
						{!! Form::open(['class'=>'form-horizontal','url'=>ADMIN.'/order/'.$edit->id,'method'=>'put']) !!}
						   <fieldset>
							<div class="control-group">
							  <label class="control-label" for="title">{{trans('admin.title')}} </label>
							  <div class="controls">
								<input type="text" value="{{$edit->title}}"  name="title" id="title" class="span6" />
								
							  </div>
							</div>
							
							
							<div class="control-group hidden-phone">
							  <label class="control-label" for="content">{{trans('admin.content')}}</label>
							  <div class="controls">
								<textarea  name="content" class="cleditor" id="content" rows="3">{{$edit->content}}</textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="cat_id">{{trans('admin.cat_id')}} </label>
							  <div class="controls">
								{!!Form::select('cat_id', $cats,$edit->cat_id,['class'=>'span6']) !!}
								
							  </div>
							</div>
							
							
							
						
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">{{trans('admin.edit')}}</button>
							  
							</div>
						  </fieldset>
						{!! Form::close() !!}  

					</div>
				</div><!--/span-->

			</div><!--/row-->
				

			

@endsection
@stop