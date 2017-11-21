@extends('layouts.app')
@section('title','Create')




@section('content')
<div class="container-fluid">
	<div class="row page-title-row">
		<div class="col-md-12">
			<h3>
				Book <small>&raquo; Add New Book</small>
			</h3>

		</div>
	</div>
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
		    @foreach ($errors->all() as $error)
		    <li>{{ $error }}</li>
		     @endforeach       
		    </ul>
		</div>
	@endif
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						Book Form
					</h3>
				</div>
				<div class="panel-body">					
					<form action="{{ route('books.store')}}" role="form" method="POST" class="form-horizontal">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="title" class="col-md-2 control-label">
										 Book Name          
									</label>
									<div class="col-md-10">
										<input type="text"  class="form-control" name="name" id="name" value= "{{ old('name') }}">
									</div>
								</div>


								<div class="form-group">
									<label for="au" class="col-md-2 control-label">
										Autor
									</label>
									<div class="col-md-10">
										<select class="form-control m-bot15" name="autor_id">
         						  	@if($autors->count() > 0)
        						  		@foreach($autors as $autor)
        				   				<option value="{{$autor->id}}">{{$autor->name}}</option>
       							  		@endForeach
       								@else
       						    No Record Found
       								@endif   
       					 			</select>
									</div>
								</div>


								<div class="form-group">
									<label for=total_pages" class="col-md-2 control-label">
										Total Pages
									</label>
									<div class="col-md-10">
										<input type="total_pages" name="total_pages"  class="form-control" id="price" value="{{ old('total_pages') }}">
									</div>
								</div>

								
								<div class="col-md-8">
									<div class="form-group">
										<div class="col-md-10 col-md-offset-2">
											<button type="submit" class="btn btn-primary btn-lg">
												<i class="fa fa-disk-o">													
												</i>
												Save New book
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection