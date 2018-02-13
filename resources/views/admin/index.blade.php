@include(ad.'.header')
@include(ad.'.navbar')

<div class="container-fluid-full">
		<div class="row-fluid">

			
			<!-- start: Content -->
			


@include(ad.'.menu')
<div id="content" class="span10">

@include(ad.'.nav')

@if(!preg_match('/login/i',URL::current()))
@include(ad.'.worn')
@endif

@yield('admin')
</div>
<!--end start: Content -->
</div>
</div>

<div class="clearfix"></div>
	
	<footer>

		<p class=" text-center">
			<span style="text-align:left;float:left text">&copy; 2016 <a href="" alt="Bootstrap_Metro_Dashboard">Pharaohs Academy </a></span>
			
		</p>

		

	</footer>
	
@include(ad.'.footer')