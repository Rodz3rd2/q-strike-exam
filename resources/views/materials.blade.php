@extends('layouts.app')

@section('title', "Material List")

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">Material List</h1>

			<a href="/materials/add" class="btn btn-primary" style="margin-bottom: 10px;">Add Meterial</a>

			@if (Session::has('message') )
			<div class="alert {{ Session::get('alert-class') }}">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<p>{{ Session::get('message') }}</p>
			</div>
			@endif

			<table class="table table-hover table-bordered table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<td>Name</td>
						<td>Sport</td>
						<td>Image</td>
						<td>Actions</td>
					</tr>
				</thead>
				<tbody>
					<?php $counter = 1; ?>
					@forelse ($materials as $material)
					<tr>
						<td>{{ $counter++ }}</td>
						<td>{{ $material->getName() }}</td>
						<td>{{ $material->getSport() }}</td>
						<td>{{ $material->getImage() }}</td>
						<td>
							<a href="/materials/{{ $material->id }}/material-options" class="btn btn-info">Material Option</a>
							<a href="/materials/edit/{{ $material->id }}" class="btn btn-success">Edit</a>
							<a href="/materials/delete/{{ $material->id }}" class="btn btn-danger delete-material">Delete</a>
						</td>
					</tr>
					@empty
						<p>No Materials</p>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection