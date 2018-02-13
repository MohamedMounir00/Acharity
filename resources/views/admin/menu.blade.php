
<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2 ">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">








						
						
						@if(auth()->user()->level == 'admin' || auth()->user()->level == 'user')
								<li><a href="{{url(ADMIN)}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> {{trans('admin.home')}}</span></a></li>	

						<li><a href="{{url(ADMIN.'/donations')}}"><i class="halflings-icon user"></i><span class="hidden-tablet"> {{trans('admin.donations')}}</span></a></li>	

						
						<li><a href="{{url(ADMIN.'/order')}}"><i class="halflings-icon user"></i><span class="hidden-tablet"> {{trans('admin.order')}}</span></a></li>	
						@endif
						@if(auth()->user()->level == 'admin')


						
							
							<li><a href="{{url(ADMIN.'/offices')}}"><i class="halflings-icon cog"></i><span class="hidden-tablet"> {{trans('admin.offices')}}</span></a></li>	
						<li><a href="{{url(ADMIN.'/catogres')}}"><i class="halflings-icon cog"></i><span class="hidden-tablet"> {{trans('admin.catogres')}}</span></a></li>	
					
						<li><a href="{{url(ADMIN.'/users')}}"><i class="halflings-icon cog"></i><span class="hidden-tablet"> {{trans('admin.users')}}</span></a></li>	
						<li><a href="{{url(ADMIN.'/order_cat')}}"><i class="halflings-icon cog"></i><span class="hidden-tablet"> {{trans('admin.order_cat')}}</span></a></li>	

						<li><a href="{{url(ADMIN.'/archives')}}"><i class="halflings-icon cog"></i><span class="hidden-tablet"> {{trans('admin.archives')}}</span></a></li>	
						@endif
						
						
					
					</ul>

				</div>
			</div>
			<!-- end: Main Menu -->