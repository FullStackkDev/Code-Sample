@extends('frontend/layouts/booking')

{{-- Page title --}}
@section('title')
Booking :: {{ $page->location_name }}
@stop

{{-- Page content --}}
@section('content')
	<div id="busyindicator"></div>
	<div class="row-fluid">
	
		{{$page->content_top }}
	
		
	<div id="content">
	<div id="cb">
		<ul class="nav nav-tabs tabbable nav-tabs-booking">
			<li class="active"><a href="#courses" data-toggle="tab">Step 1: Location / Courses</a></li>
			<li><a href="#details" data-toggle="tab" data-bind="disableClick: (!booking().StepOneDone())">Step 2: Student Details</a></li>
			<li><a href="#comfirmation" data-toggle="tab" data-bind="disableClick: (!booking().StepTwoDone())">Step 3: Confirmation / Payment</a></li>
		</ul>
     
		<div class="tab-content">
			<div id="courses" class="tab-pane active">
				<div class="row-fluid">
					<div class="panel panel-default span6">
						<div class="panel-heading"><h3 class="panel-title">Select GiftVoucher Course(s) - {{$page->location_name}} <button data-bind="enable: (booking().StepOneDone())" class="btn btn-small next_btn pull-right">Step 2 <i class="icon-arrow-right icon-white"></i></button></h3></div>
						<div class="panel-body">
							@include('bookings/public/courses-vouchers')
						</div>
					</div>
					<div class="panel panel-default span6">
						<div class="panel-heading"><h3 class="panel-title">Confirm Courses Classes <button data-bind="enable: (booking().StepOneDone())" class="btn btn-small next_btn pull-right">Step 2 <i class="icon-arrow-right icon-white"></i></button></h3></div>
						<div class="panel-body">
							@include('bookings/public/comfirmation')
							<p>&nbsp;</p>
							<button class="btn btn-small next_btn pull-right" data-bind="enable: (booking().StepOneDone())">Step 2 <i class="icon-arrow-right icon-white"></i></button>
							<p>&nbsp;</p>
						</div>
					</div>
				</div>
															
			</div> <!-- /tab-pane -->
		
			<div class="tab-pane" id="details">
				<div class="row-fluid">
					<div class="panel panel-default span6">
						<div class="panel-heading"><h3 class="panel-title">Your Details <button class="btn btn-small back_btn pull-right"><i class="icon-arrow-left icon-white"></i> Back </button></h3></div>
						<div class="panel-body">
							@include('bookings/public/details')
							<p>&nbsp;</p>
							<button class="btn btn-small back_btn pull-left"><i class="icon-arrow-left icon-white"></i> Back </button>
							<p>&nbsp;</p>
						</div>
					</div>
					<div class="panel panel-default span6">
						<div class="panel-heading"><h3 class="panel-title">Students Details <button data-bind="enable: ($root.booking().StepTwoDone())" class="btn btn-small next_btn pull-right">Step 3 <i class="icon-arrow-right icon-white"></i></button></h3></div>
						<div class="panel-body">
							@include('bookings/public/students')
							<p>&nbsp;</p>
							<button data-bind="enable: ($root.booking().StepTwoDone())" class="btn btn-small next_btn pull-right">Step 3 <i class="icon-arrow-right icon-white"></i></button>
							<p>&nbsp;</p>
						</div>
					</div>
				</div> <!-- /row-fluid -->
			</div> <!-- /tab-pane -->
		
			<div class="tab-pane" id="comfirmation">
				<div class="row-fluid">
					<div class="panel panel-default span6">
						<div class="panel-heading" id="cbConfirmCourses"><h3 class="panel-title">Comfirm Courses Classes <button class="btn btn-small back_btn pull-right"><i class="icon-arrow-left icon-white"></i> Back </button></h3></div>
						<div class="panel-body">
							@include('bookings/public/comfirmation')
							<p>&nbsp;</p>
								<button class="btn btn-small back_btn pull-left"><i class="icon-arrow-left icon-white"></i> Back </button>
							<p>&nbsp;</p>
						</div>
					</div>
					<div class="panel panel-default span6">
						<div class="panel-heading"><h3 class="panel-title">Select your Payment Type <button class="btn btn-small back_btn pull-right"><i class="icon-arrow-left icon-white"></i> Back</button></h3></div>
						<div class="panel-body">
							@include('bookings/public/payment')
						</div>
					</div>
				</div> <!-- /row-fluid -->
			</div> <!-- /tab-pane -->
		</div>
	</div>
	</div>
	
{{ $page->content_bottom }}

	</div><!--/row-->

	<script>
	var actn = 'public';
	var back = '0';
	var loc_id = '{{$location_id}}';
	var order_id = '{{$order_id}}';
	var ref = '{{$referrer}}';
	var act_course = '{{$course_id}}';
	var act_instance = '{{$instance_id}}';
	var act_bundle = '{{$bundles}}';
	</script>
	
	<script src="/_scripts/src/app/require.config.js"></script>
<script data-main="/_scripts/src/app/bootstrapers/booking.public.js" src="/_scripts/src/bower_modules/requirejs/require.js"></script>
	
@stop
