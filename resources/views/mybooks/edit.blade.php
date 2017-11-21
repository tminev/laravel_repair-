@extends('layouts.app')
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
					MY BOOK Form
					</h3>
				</div>
				<div class="panel-body">					
					<form action="{{ route('mybooks.update', $mybook->id)}}" role="form" method="POST" class="form-horizontal">
				
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="_method" value="PUT">
						

						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="speed" class="col-md-2 control-label">
										      Speed      
									</label>
									<div class="col-md-10">
										<input type="text"  class="form-control" name="speed" id="speed" value= "{{ $mybook->speed }}">
									</div>
								</div>


								

								<div class="form-group">
									<label for="pages_read" class="col-md-2 control-label">
										Pages Read
									</label>
									<div class="col-md-10">
										<input type="text" name="pages_read"  class="form-control" id="pages_read" value="{{ $mybook->pages_read }}">
									</div>
								</div>

								



							
								<div class="col-md-8">
									<div class="form-group">
										<div class="col-md-10 col-md-offset-2">
											<button type="submit" class="btn btn-primary btn-lg">
												<i class="fa fa-disk-o">													
												</i>
												Save Info
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