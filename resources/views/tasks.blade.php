@extends('layouts.app')

@section('content')
<div class="panel-body">
	<!-- Mjesto za prikaz gre�aka -->
	@include('common.errors')
	
	<!-- Webobrazac za novi Task -->
	<form action="/task" method="POST" class = "form-horizontal">
	
	{{ csrf_field() }}
	<div class="form-group">
			<label for="task" classs ="col-sm-3 control-label">Task</label>
			
			<div class="col-sm-6">
			<input type="text" name="name" id="task-name" class="form-control">
			</div>
	</div>
		<div class="form-group">
			<div class="col-sm-offset-3 col-sm-6">
				<button type="submit" class="btn btn-default">
				<i class="fa fa-plus"></i>Dodaj task
				</button>
			</div>
		</div>
		</form>
	</div>
@endsection