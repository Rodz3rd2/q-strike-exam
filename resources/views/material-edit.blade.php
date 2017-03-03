@extends('layouts.app')

@section('title', "Edit Material")

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">Edit Material</h1>

			<a href="/materials" class="btn btn-default" style="margin-bottom: 10px;">Back</a>

			<form action="/materials/update" method="POST" role="form">
				{{ csrf_field() }}

				<input type="hidden" name="Id" value="{{ $material->id }}">
				<input type="hidden" name="_method" value="PUT">

				<div class="form-group">
					<label for="Name">Name</label>
					<input type="text" class="form-control" value="{{ $material->Name }}" id="Name" name="Name" placeholder="Name">
				</div>

				<div class="form-group">
					<?php $sports = ["Football", "Baseball", "Basketball", "Hockey"]; ?>
					<select class="form-control" name="Sport" id="Sport">
						<option>Select Sport</option>
						@foreach ($sports as $sport)
							<option @if ( $sport == $material->Name ? "selected" : "" ) @endif>{{ $sport }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="Image">Image</label>
					<input type="text" class="form-control" value="{{ $material->Image }}" id="Image" name="Image" placeholder="Image">
				</div>
			
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

@endsection