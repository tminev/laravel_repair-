@extends('layouts.app')
@section('title','Edit')



@section('content')
<div class="container-fluid">
	<div class="row page-title-row">
		<div class="col-md-12">
			<h3>
				Author <small>&raquo; Edit</small>
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
						 Form
					</h3>
				</div>
				<div class="panel-body">					
					<form action="{{ route('autors.update', $autor->id)}}" role="form" method="POST" class="form-horizontal">
					<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="_method" value="PUT">
						<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="name" class="col-md-2 control-label">
										      Name      
									</label>
									<div class="col-md-10">
										<input type="text"  class="form-control" name="name" id="name" value= "{{ $autor->name }}">
									</div>
								</div>
								<div class="form-group">
									<label for="born_date" class="col-md-2 control-label">
										Born Date
									</label>
									<div class="col-md-10">
										<input type="text" name="born_date"  class="form-control" id="born_date" value="{{ $autor->born_date }}">
									</div>
								</div>
								<div class="form-group">
									<label for="city" class="col-md-2 control-label">
										City
									</label>
									<div class="col-md-10">
										<input type="text" name="city"  class="form-control" id="city" value="{{ $autor->city }}">
									</div>
								</div>
								<div class="form-group">
									<label for="bio" class="col-md-2 control-label">
										Bio
									</label>
									<div class="col-md-10">
										<input type="text" name="bio"  class="form-control" id="bio" value="{{ $autor->bio }}">
									</div>
								</div>

								



							
								<div class="col-md-8">
									<div class="form-group">
										<div class="col-md-10 col-md-offset-2">
											<button type="submit" class="btn btn-primary btn-lg">
												<i class="fa fa-disk-o">													
												</i>
												Save 
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