@extends('layouts.app')
@section('title','Create')



@section('content')

{!! Form::open(['route' => 'autors.store']) !!}
<div class="form-group">
	<div class="col-md-2 control-label">
		{!!	Form::label('name', 'Name') !!}
	</div>
	<div class="col-md-10">
		{!! Form::text('name', old('name'), ['class'=>'form-control', 'id'=>'name'] )!!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-2 control-label">
		{!!	Form::label('born_date', 'Born Date') !!}
	</div>

	<div class="col-md-10">
		{!!    Form::text('born_date', old('born_date') , ['class'=>'form-control', 'id'=>'born_date'])!!}
	</div>
</div>
<div class="form-group">


	<div class="col-md-2 control-label">
		{!!	Form::label('city', 'City') !!}
	</div>
	<div class="col-md-10">
		{!!    Form::text('city', old('city'), ['class'=>'form-control', 'id'=>'city']) !!}
	</div>
</div>
<div class="form-group">


	<div class="col-md-2 control-label">
		{!!	Form::label('bio', 'bio') !!}
	</div>
	<div class="col-md-10">
		{!!    Form::text('bio', old('bio'), ['class'=>'form-control', 'id'=>'bio']) !!}
	</div>
</div>
{!!Form::submit('Save')!!}
{!! Form::close() !!}


@endsection