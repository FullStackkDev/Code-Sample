@extends('layout')
@section('content')            
<h1>Create a User</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'users')) }}

<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('username', 'UserName') }}
    {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
    {{ Form::label('password', 'Password') }}
    {{ Form::text('password', Input::old('password'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('address', 'Address') }}
    {{ Form::text('address', Input::old('address'), array('class' => 'form-control')) }}
</div>

{{ Form::submit('Create the User!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop 