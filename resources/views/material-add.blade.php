@extends('layouts.app')

@section('title', "Add Material")

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">Add Material</h1>

			<a href="/materials" class="btn btn-default" style="margin-bottom: 10px;">Back</a>

			@if (count($errors) > 0)
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif

			<form action="/materials/store" method="POST" role="form">

				{{ csrf_field() }}

				<div class="form-group">
					<label for="Name">Name</label>
					<input type="text" class="form-control" name="Name" id="Name" placeholder="Name">
				</div>

				<div class="form-group">
					<label for="Sport">Sport</label>
					<select class="form-control" name="Sport" id="Sport">
						<option>Select Sport</option>
						<option>Football</option>
						<option>Baseball</option>
						<option>Basketball</option>
						<option>Hockey</option>
					</select>
				</div>

				<div class="form-group">
					<label for="Image">Image</label>
					<input type="text" class="form-control" name="Image" id="Image" placeholder="Image">
				</div>
			
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

@endsection