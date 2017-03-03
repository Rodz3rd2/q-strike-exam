@extends('layouts.app')

@section('title', "Material Option")

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">{{ $material->Name }} Option</h1>

			<a href="/materials" class="btn btn-default" style="margin-bottom: 10px;">Back</a>

			<table class="table table-hover table-bordered table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<td>Name</td>
					</tr>
				</thead>
				<tbody>
					<?php $counter = 1; ?>
					@forelse ($materialOptions as $mo)
					<tr>
						<td>{{ $counter++ }}</td>
						<td>{{ $mo->getName() }}</td>
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