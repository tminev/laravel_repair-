@extends('layouts.master')
@section('title','Edit')



@section('content')
<div class="container-fluid">
	<div class="row page-title-row">
		<div class="col-md-12">
			<h3>
				book <small>&raquo; Edit</small>
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
						Student Form
					</h3>
				</div>
				<div class="panel-body">					
					<form action="{{ route('books.update', $book->id)}}" role="form" method="POST" class="form-horizontal">
					<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="_method" value="PUT">
						<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="title" class="col-md-2 control-label">
										      Title      
									</label>
									<div class="col-md-10">
										<input type="text"  class="form-control" name="title" id="name" value= "{{ $book->title }}">
									</div>
								</div>
								<div class="form-group">
									<label for="year_public" class="col-md-2 control-label">
										Year public
									</label>
									<div class="col-md-10">
										<input type="text" name="year_public"  class="form-control" id="from" value="{{ $book->year_public }}">
									</div>
								</div>
								<div class="form-group">
									<label for="price" class="col-md-2 control-label">
										Price
									</label>
									<div class="col-md-10">
										<input type="text" name="price"  class="form-control" id="price" value="{{ $book->price }}">
									</div>
								</div>

								



							
								<div class="col-md-8">
									<div class="form-group">
										<div class="col-md-10 col-md-offset-2">
											<button type="submit" class="btn btn-primary btn-lg">
												<i class="fa fa-disk-o">													
												</i>
												Save New Book
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