<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
	/**
	 * Shows the profile for the given user.
	 *
	 * @param int $id
	 * @return View
	 */
	public function show($id)
	{
		return 'User ID: '.$id;
		// return view('user.profile', ['user' => User::findOrFail($id)]);
	}
}

