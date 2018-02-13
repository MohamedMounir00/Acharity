@include(ad.'.header')

<style type="text/css">
			body { background: url({{ASSET}}/img/bg-login.jpg) !important; }
		</style>
		
		
<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h2> {{trans('admin.loginaccount')}}</h2>
					{!! Form::open(['class'=>'form-horizontal']) !!}
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="email" id="username" type="text" placeholder="{{trans('admin.email')}}"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="{{trans('admin.password')}}"/>
							</div>
							<div class="clearfix"></div>
							
							<label class="remember" for="remember"><input type="checkbox" id="remember"  value="1" /> {{trans('admin.Rememberme')}}</label>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">{{trans('admin.login')}}</button>
							</div>
							<div class="clearfix"></div>
					
					{!! Form::close() !!}
					<hr>
				
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	

@include(ad.'.footer')