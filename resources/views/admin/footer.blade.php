
	<!-- start: JavaScript-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="{{ASSET}}/js/libs/jquery-2.1.1.min.js"><\/script>');
			}
		</script>

		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="{{ASSET}}/js/libs/jquery-ui-1.10.3.min.js"><\/script>');
			}
		</script>

		<script src="{{ASSET}}/
js/jquery-2.2.3.min.js"></script>
	<script src="{{ASSET}}/
js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="{{ASSET}}/
js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="{{ASSET}}/
js/jquery.ui.touch-punch.js"></script>
	
		<script src="{{ASSET}}/
js/modernizr.js"></script>
	
		<script src="{{ASSET}}/
js/bootstrap.min.js"></script>
	
		<script src="{{ASSET}}/
js/jquery.cookie.js"></script>
	
		<script src='{{ASSET}}/
js/fullcalendar.min.js'></script>
	
		<script src='{{ASSET}}/
js/jquery.dataTables.min.js'></script>

		<script src="{{ASSET}}/
js/excanvas.js"></script>
	<script src="{{ASSET}}/
js/jquery.flot.js"></script>
	<script src="{{ASSET}}/
js/jquery.flot.pie.js"></script>
	<script src="{{ASSET}}/
js/jquery.flot.stack.js"></script>
	<script src="{{ASSET}}/
js/jquery.flot.resize.min.js"></script>
	
		<script src="{{ASSET}}/
js/jquery.chosen.min.js"></script>
	
		<script src="{{ASSET}}/
js/jquery.uniform.min.js"></script>
		
		<script src="{{ASSET}}/
js/jquery.cleditor.min.js"></script>
	
		<script src="{{ASSET}}/
js/jquery.noty.js"></script>
	
		<script src="{{ASSET}}/
js/jquery.elfinder.min.js"></script>
	
		<script src="{{ASSET}}/
js/jquery.raty.min.js"></script>
	
		<script src="{{ASSET}}/
js/jquery.iphone.toggle.js"></script>
	
		<script src="{{ASSET}}/
js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="{{ASSET}}/
js/jquery.gritter.min.js"></script>
	
		<script src="{{ASSET}}/
js/jquery.imagesloaded.js"></script>
	
		<script src="{{ASSET}}/
js/jquery.masonry.min.js"></script>
	
		<script src="{{ASSET}}/
js/jquery.knob.modified.js"></script>
	
		<script src="{{ASSET}}/
js/jquery.sparkline.min.js"></script>
	
		<script src="{{ASSET}}/
js/counter.js"></script>
	
		<script src="{{ASSET}}/
js/retina.js"></script>

		<script src="{{ASSET}}/
js/custom.js"></script>
	<!-- end: JavaScript-->
		<script>
			$(document).ready(function() {


	$('.delete_this').on('click',function() {
							var id = $(this).attr('formid');
							$.SmartMessageBox({
								title : "Smart Alert!",
								content : "{{trans('main.ask_to_delete')}}",
								buttons : '[{{trans('main.no')}}][{{trans('main.yes')}}]'
							}, function(ButtonPressed) {
								if (ButtonPressed === "Yes") {
									$('.form'+id).submit();
									return false;	
											

								}
								if (ButtonPressed === "No") {
									$.smallBox({
										//title : "Callback function",
									//	content : "<i class='fa fa-clock-o'></i> <i>You pressed No...</i>",
									//	color : "#C46A69",
										//iconSmall : "fa fa-times fa-2x fadeInRight animated",
										timeout : 9
									});
								}
					
							});
							e.preventDefault();
						});
		</script>

	
</body>
</html>
