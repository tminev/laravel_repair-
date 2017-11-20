@extends('layouts.app')

@section('title', 'Autor Profile')


@section('content')
<h1>{{ $autor->name }}</h1>
<div class="form-group">
	{{ $autor->born_date }}
	<div class="col-md-2 control-label">
	Date ot Born
</div>
</div>
<div class="form-group">
	{{ $autor->city }}
	<div class="col-md-2 control-label">
	City
</div>
</div>
@endsection