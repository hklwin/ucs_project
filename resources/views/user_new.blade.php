@extends('layouts.app')

@section('title', 'Users Page')

@section('content')

	<div class="users">
		<h2><a href="/users">Users</a> <i class="fa fa-long-arrow-right"></i> New</h2>
		<div class="form">
			<form action="/user/create" method="post">
				{{ csrf_field() }}
				<div class="form-row">
					<label>Name *</label>
					<input type="text" class="form-control" name="name" required>
				</div>
				<div class="form-row">
					<label>Email *</label>
					<input type="email" class="form-control" name="email" required>
				</div>
				<div class="form-row">
					<label>Password *</label>
					<input type="password" class="form-control" name="password" required>
				</div>
				<div class="form-row">
					<button class="btn btn-primary" type="submit">Create</button>
				</div>
			</form>
		</div>
	</div>

@endsection