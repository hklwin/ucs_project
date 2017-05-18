@extends('layouts.app')

@section('title', 'Users Page')

@section('content')

	<div class="users">
		<h2>Users</h2>
		<div class="links">
			<a href="user/new">Add New User</a>
		</div>
		<div class="list">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				@foreach ($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>
							<a href="/user/{{$user->id}}/edit">Edit</a>
							<a href="#" class="delete-user" data-user-id="{{$user->id}}">Delete</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<script>
	$(function () {
		$('.delete-user').click(function() {
			if(confirm("Are you sure to delete this user?")) {
				user_id = $(this).data('user-id');
				
				$.ajax({
					type:"DELETE",
					url:"/user/" + user_id + "/delete",
					//data: { "_method": "DELETE" },
			  	headers: {
				    'X-CSRF-Token':  $('meta[name="csrf-token"]').attr('content')
					},
					success: function(data) {
						// console.log(data);
						window.location.href = "/users";
					}
				});
			}
		});
	});
	</script>

@endsection