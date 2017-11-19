@extends('layouts.master')
@section('title','Books')



@section('content')
<div class="container">
<div class="row">
	<div class="col-md-6">
		<h1>Users</h1>
	</div>	
</div>
@if(Session::has('success'))
<div class="alert alert-success">
	<button class="close" type="button" data-dismiss="alert">&times;</button>
	<strong>
		<i class="fa fa-check-circle fa-lg fa-fw"></i>Success. &nbsp;
	</strong>
	{{ Session::get('success') }}
</div>
@endif
<div class="row">
<table class="table">
	<tr>
		<td>
			book Name
		</td>
		<td>
			Year Public
		</td>
		<td> 
			Price
		</td>
		<td>
			Edit
		</td>
		<td>
			Delete
		</td>
	</tr>
	@foreach($books as $book)
	<tr>
		<td>
			<a href="{{route('books.show', $book->id)}}">
				{{ $book->title }}				
			</a>			
		</td>
		<td>
			{{ $book->year_public }}
		</td>
		<td>
			{{ $book->price }}
		</td>
		<td>
			<a href="{{ route('books.edit', $book->id) }}" class="btn btn-info">Edit</a>
		</td>
		<td>
			<form class="form form-inline" action="{{route('books.destroy', $book->id)}}" method="POST">
							{{ csrf_field() }}
							{{ method_field('DELETE')}}
							
							<button class="btn btn-danger">DELETE</button>
						</form>
		</td>
	</tr>
@endforeach
</table>
<div class="row">
	<div class="col-md-6">
		<a href="{{ route('books.create') }}" class="btn btn-info">Add New Book</a>
	</div>
</div>
</div>
</div>
@endsection