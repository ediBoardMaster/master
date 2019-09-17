@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="card">
			<div class="header">
				<h2><strong>Form</strong></h2>
				<!--ul class="header-dropdown">
					<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="javascript:void(0);">Action</a></li>
							<li><a href="javascript:void(0);">Another action</a></li>
							<li><a href="javascript:void(0);">Something else</a></li>
						</ul>
					</li>
					<li class="remove">
						<a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
					</li>
				</ul-->
			</div>
			<div class="body">
				<form class="form-horizontal" action="ayam" method="post" enctype="multipart/form-data">
					@include('form.conference-setup')
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('css')
<!-- Bootstrap Select Css -->
<link rel="stylesheet" href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" />
<link rel="stylesheet" href="{{ asset('plugins/jquery-steps/jquery.steps.css') }}" />
@endsection

@section('js')
<script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script> <!-- Jquery Validation Plugin Css -->
<script src="{{ asset('plugins/jquery-steps/jquery.steps.js') }}"></script> <!-- JQuery Steps Plugin Js -->
<script type="text/javascript">
	$('#wizard_vertical').steps({
		headerTag: 'h2',
		bodyTag: 'section',
		transitionEffect: 'slideLeft',
		stepsOrientation: 'vertical',
		onInit: function (event, currentIndex) {
			setButtonWavesEffect(event);
		},
		onStepChanged: function (event, currentIndex, priorIndex) {
			setButtonWavesEffect(event);
		},
		onFinished: function (event, currentIndex) {
			$("form").submit();
		}
	});
	function setButtonWavesEffect(event) {
		$(event.currentTarget).find('[role="menu"] li a').removeClass('waves-effect');
		$(event.currentTarget).find('[role="menu"] li:not(.disabled) a').addClass('waves-effect');
	}
</script>
<script type="text/javascript">
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				targetElement=$('.logo_preview');
				targetElement.show();
				if(!e.target.result.substring(0, 12).includes('data:image'))
				{
					targetElement.hide();
					$('input[name=logo]').val('');
					setTimeout(function(){
						alert('Only image file type supported');
					}, 25);
					return false;
				}
				targetElement.attr('src', e.target.result);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
@endsection

@section('style')
<style type="text/css">
	.logo_preview{
		max-width:180px;
	}
</style>
@endsection