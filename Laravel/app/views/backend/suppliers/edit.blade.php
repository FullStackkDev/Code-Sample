@extends('backend/layouts/default')

{{-- Page title --}}
@section('title')
Supplier Update ::
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>
		Supplier Update

		<div class="pull-right">
			<a href="{{ route('backend.suppliers.index') }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Back</a>
		</div>
	</h3>
</div>

<!-- Tabs -->
<ul class="nav nav-tabs">
	<li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
	<li><a href="#tab-address" data-toggle="tab">Address Details</a></li>
</ul>

{{ Form::model($supplier, array('method' => 'PATCH', 'route' => array('backend.suppliers.update', $supplier->id),  'class'=>'form-horizontal')) }}
	
	<!-- CSRF Token -->
	{{ Form::token() }}

	<!-- Tabs Content -->
	<div class="tab-content">
		<!-- General tab -->
		<div class="tab-pane active" id="tab-general">
			<!-- Supplier Name -->
			<div class="control-group {{ $errors->has('business_name') ? 'error' : '' }}">
				<label class="control-label" for="business_name">Supplier Name</label>
				<div class="controls">
					<input type="text" name="business_name" id="username" value="{{ Input::old('business_name', $supplier->business_name) }}" />
					{{ $errors->first('business_name', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- First Name -->
			<div class="control-group {{ $errors->has('first_name') ? 'error' : '' }}">
				<label class="control-label" for="first_name">First Name</label>
				<div class="controls">
					<input type="text" name="first_name" id="first_name" value="{{ Input::old('first_name', $supplier->first_name) }}" />
					{{ $errors->first('first_name', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Last Name -->
			<div class="control-group {{ $errors->has('last_name') ? 'error' : '' }}">
				<label class="control-label" for="last_name">Last Name</label>
				<div class="controls">
					<input type="text" name="last_name" id="last_name" value="{{ Input::old('last_name', $supplier->last_name) }}" />
					{{ $errors->first('last_name', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- business_phone -->
			<div class="control-group {{ $errors->has('business_phone') ? 'error' : '' }}">
				<label class="control-label" for="business_phone">Phone</label>
				<div class="controls">
					<input type="text" name="business_phone" id="business_phone" value="{{ Input::old('business_phone', $supplier->business_phone) }}" />
					{{ $errors->first('business_phone', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Mobile -->
			<div class="control-group {{ $errors->has('mobile') ? 'error' : '' }}">
				<label class="control-label" for="mobile">Mobile</label>
				<div class="controls">
					<input type="text" name="mobile" id="mobile" value="{{ Input::old('mobile', $supplier->mobile) }}" />
					{{ $errors->first('mobile', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- business_fax -->
			<div class="control-group {{ $errors->has('business_fax') ? 'error' : '' }}">
				<label class="control-label" for="business_fax">Fax</label>
				<div class="controls">
					<input type="text" name="business_fax" id="business_fax" value="{{ Input::old('business_fax', $supplier->business_fax) }}" />
					{{ $errors->first('business_fax', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Email -->
			<div class="control-group {{ $errors->has('email') ? 'error' : '' }}">
				<label class="control-label" for="email">Email</label>
				<div class="controls">
					<input type="text" name="email" id="email" value="{{ Input::old('email', $supplier->email) }}" />
					{{ $errors->first('email', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Activation Status -->
			<div class="control-group {{ $errors->has('activated') ? 'error' : '' }}">
				<label class="control-label" for="activated">Supplier Activated</label>
				<div class="controls">
					<select{{ ($supplier->id === Sentry::getId() ? ' disabled="disabled"' : '') }} name="activated" id="activated">
						<option value="1"{{ ($supplier->isActivated() ? ' selected="selected"' : '') }}>@lang('general.yes')</option>
						<option value="0"{{ ( ! $supplier->isActivated() ? ' selected="selected"' : '') }}>@lang('general.no')</option>
					</select>
					{{ $errors->first('activated', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

		</div>
		
		<!-- Details tab -->
		<div class="tab-pane" id="tab-address">
			<!-- Supplier Name -->
			<div class="control-group {{ $errors->has('business_address') ? 'error' : '' }}">
				<label class="control-label" for="business_address">Address</label>
				<div class="controls">
					<input type="text" name="business_address" id="username" value="{{ Input::old('business_address', $supplier->business_address) }}" />
					{{ $errors->first('business_address', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- First Name -->
			<div class="control-group {{ $errors->has('business_city') ? 'error' : '' }}">
				<label class="control-label" for="business_city">City</label>
				<div class="controls">
					<input type="text" name="business_city" id="business_city" value="{{ Input::old('business_city', $supplier->business_city) }}" />
					{{ $errors->first('business_city', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Last Name -->
			<div class="control-group {{ $errors->has('business_state') ? 'error' : '' }}">
				<label class="control-label" for="business_state">State</label>
				<div class="controls">
					{{ Form::select('business_state', $states, $supplier->business_state, array('class'=>'input-large')) }}
					{{ $errors->first('business_state', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Mobile -->
			<div class="control-group {{ $errors->has('business_post_code') ? 'error' : '' }}">
				<label class="control-label" for="business_post_code">Post Code</label>
				<div class="controls">
					<input type="text" name="business_post_code" id="business_post_code" value="{{ Input::old('business_post_code', $supplier->business_post_code) }}" />
					{{ $errors->first('business_post_code', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Email -->
			<div class="control-group {{ $errors->has('keywords') ? 'error' : '' }}">
				<label class="control-label" for="keywords">keywords</label>
				<div class="controls">
					<textarea rows="6" name="keywords" id="keywords" value="{{ Input::old('keywords', $supplier->keywords) }}" ></textarea>
					{{ $errors->first('keywords', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
		</div>

	</div>

	<!-- Form Actions -->
	<div class="control-group">
		<div class="controls">
			<a class="btn btn-link" href="{{ route('backend.suppliers.index') }}">Cancel</a>

			<button type="reset" class="btn">Reset</button>

			<button type="submit" class="btn btn-success">Update Supplier</button>
		</div>
	</div>
	
{{ Form::Close() }}
@stop
