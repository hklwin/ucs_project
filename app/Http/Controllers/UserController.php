<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use View;

class UserController extends Controller
{
		// For API. Resource functions

		public function index() {
			$users = User::all();

			return $users->toJson();
		}

		public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        return $user->toJson();
		}

		public function show($id) {
				$user = User::find($id);

				return $user->toJson();
		}

		public function update($id, Request $request) {
				$user = User::find($id);

				$name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

				return $user->toJson();
		}

		public function destroy($id) {
				try {
					$user = User::find($id);
					$user->delete();

					return "OK";
				}
				catch(Exception $e) {
				}

				return "ERROR";
		}

		// For Web Front-end

    // show all users
		public function showUsers() {
				$users = User::all();

				return View::make('users', array('users' => $users));
			// return view('users');
		}

		// create user
		public function createUser(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

				return redirect('/users');
		}

		// edit user
		public function editUser($id)
		{
				$user = User::find($id);

				return View::make('user_edit')->with('user', $user);
		}

		// update user
		public function updateUser(Request $request)
		{
				$id = $request->input('id');
				$name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::find($id);
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

				return redirect('/users');
		}

		// delete user
		public function deleteUser($id)
		{
				try {
					$user = User::find($id);
					$user->delete();

					return "OK";
				}
				catch(Exception $e) {
				}

				return "ERROR";
		}
}
