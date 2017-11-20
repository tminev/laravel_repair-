@extends('layouts.app')

@section('title', 'Autor Profile')


@section('content')
<h1>{{ $book->name }}</h1>
<div class="form-group">
	{{ $book->autor_id }}
	<div class="col-md-2 control-label">
	Autor
</div>
</div>
<div class="form-group">
	{{ $book->total_pages }}
	<div class="col-md-2 control-label">
	Total Pages
</div>
</div>
@endsection