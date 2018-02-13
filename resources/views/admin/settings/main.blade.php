@extends(ad.'.index')
@section('admin')

			
			
<div class="row-fluid ">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>{{$title}}</h2>
						
					</div>
					<div class="box-content">
						{!! Form::open(['class'=>'form-horizontal']) !!}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="sitename">{{trans('admin.sitename')}} </label>
							  <div class="controls">
								<input type="text" value="{{$setting->sitename}}" name="sitename" id="sitename" class="span6" />
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="siteemail">{{trans('admin.siteemail')}} </label>
							  <div class="controls">
								<input type="text" value="{{$setting->sitemail}}" name="sitemail" id="siteemail"  class="span6"/>
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="siteurl">{{trans('admin.siteurl')}} </label>
							  <div class="controls">
								<input type="text" value="{{$setting->siteurl}}" name="siteurl" id="siteurl"  class="span6" />
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="site_maintenance">{{trans('admin.site_maintenance')}} </label>
							  <div class="controls">
								{!! Form::select('site_maintenance',['1'=>trans('admin.enabel'),'0'=>trans('admin.disable')],$setting->site_maintenance,['class'=>'span6'])!!}
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="site_maintenance">{{trans('admin.site_register')}} </label>
							  <div class="controls">
								{!! Form::select('site_register',['1'=>trans('admin.enabel'),'0'=>trans('admin.disable')],$setting->site_register,['class'=>'span6'])!!}
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="site_maintenance">{{trans('admin.site_auto_active')}} </label>
							  <div class="controls">
								{!! Form::select('site_auto_active',['1'=>trans('admin.enabel'),'0'=>trans('admin.disable')],$setting->site_auto_active,['class'=>'span6'])!!}
								
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="site_smtp_host">{{trans('admin.site_smtp_host')}} </label>
							  <div class="controls">
								<input type="text" value="{{$setting->site_smtp_host}}" name="site_smtp_host" id="site_smtp_host"  class="span6"/>
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="mail_driver">{{trans('admin.mail_driver')}} </label>
							  <div class="controls">
								<input type="text" value="{{$setting->driver}}" name="driver" id="mail_driver"  class="span6"/>
								
							  </div>
							</div>

							
							<div class="control-group">
							  <label class="control-label" for="site_smtp_email">{{trans('admin.site_smtp_email')}} </label>
							  <div class="controls">
								<input type="text" value="{{$setting->site_smtp_email}}" name="site_smtp_email" id="site_smtp_email"  class="span6"/>
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="site_smtp_port">{{trans('admin.site_smtp_port')}} </label>
							  <div class="controls">
								<input type="text" value="{{$setting->site_smtp_port}}" name="site_smtp_port" id="site_smtp_port"  class="span6"/>
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="site_smtp_pass">{{trans('admin.site_smtp_pass')}} </label>
							  <div class="controls">
								<input type="text" value="{{$setting->site_smtp_pass}}" name="site_smtp_pass" id="site_smtp_pass"  class="span6"/>
								
							  </div>
							</div>

							
							
							
							<div class="control-group hidden-phone">
							  <label class="control-label" for="message_maintenance">{{trans('admin.message_maintenance')}}</label>
							  <div class="controls">
								<textarea  name="message_maintenance" class="cleditor" id="message_maintenance" rows="3">{{$setting->message_maintenance}}</textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">{{trans('admin.save')}}</button>
							  
							</div>
						  </fieldset>
						{!! Form::close() !!}  

					</div>
				</div><!--/span-->

			</div><!--/row-->
			

@endsection
@stop