@extends('layouts.master')
@section('title','Autors')



@section('content')
<div class="container">
<div class="row">
	<div class="col-md-6">
		<h1>Autors</h1>
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
			Autor Name
		</td>
		<td>
			Born Date
		</td>
		<td> 
			City
		</td>
		<td>
			Edit
		</td>
		<td>
			Delete
		</td>
	</tr>
	@foreach($autors as $autor)
	<tr>
		<td>
			<a href="{{route('autor.show', $autor->id)}}">
				{{ $autor->name }}				
			</a>			
		</td>
		<td>
			{{ $autor->born_date }}
		</td>
		<td>
			{{ $autor->city }}
		</td>
		<td>
			<a href="{{ route('autors.edit', $autor->id) }}" class="btn btn-info">Edit</a>
		</td>
		<td>
			<form class="form form-inline" action="{{route('autors.destroy', $autor->id)}}" method="POST">
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
		<a href="{{ route('autors.create') }}" class="btn btn-info">New Autor</a>
	</div>
</div>
</div>
</div>
@endsection