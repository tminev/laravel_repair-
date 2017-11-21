@extends('layouts.app')
@section('title','Books')



@section('content')
<div class="container">
<div class="row">
	<div class="col-md-8">
		<h1>MY Books</h1>
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
<div class="col-sm-7">
	<table class="table">
		<tr>
			<td>User Name</td>
			<td>Book Name</td>
			<td>Speed</td>
			<td>Pages Read</td>
			<td>Total Pages</td>
			<td>Update</td>
			<td>Delete</td>
		</tr>
		
		@foreach($mybooks as $mybook)
			<tr>
				<td>{{ $mybook->user->name }}</td>
				<td>
					<a href="{{route('mybooks.show', $mybook->id)}}">{{ $mybook->book->name }}
					</a>
				</td>
				<td>{{ $mybook->speed }}</td>
				<td>{{ $mybook->pages_read }}</td>
				<td>{{ $mybook->book->total_pages }}</td>
				<td> 
					<a href="{{route('mybooks.edit', $mybook->id)}}"> Update</a>
				</td>
				<td> 
					<form class="form form-inline" action="{{route('mybooks.destroy', $mybook->id)}}" method="POST">
							{{ csrf_field() }}
							{{ method_field('DELETE')}}
							
							<button class="btn btn-danger">DELETE</button>
			</form>
				</td>
				
			</tr>
		@endforeach

	</table>

</div>

<div class="col-sm-5">

	<form action="{{ route('mybooks.store')}}" role="form" method="POST" class="form-horizontal">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">				

		<table class="table">
			<tr>
				<td>Book Name</td>
				<td>Autor</td>
				<td>Total Pages</td>
				<td>Buy</td>
			</tr>
			
			@foreach($books as $book)
				<tr>
					<td> <a href="{{route('books.show', $book->id)}}"> {{ $book->name}} </a>	</td>
					<td>{{ $book->autor->name}}</td>
					<td>{{ $book->total_pages }}</td>
					<td>
						<input type="radio" name="book_id"  class="form-control" id="book_id" value=" {{ $book->id }}">	 
					</td>
				</tr>
			@endforeach
		</table>
		<div class="row">
			<div class="col-md-6">									
				<button type="submit" class="btn btn-primary btn-lg">
						Add New book
				</button>
			</div>
		</div>


	</form>
</div>
</div>

@endsection