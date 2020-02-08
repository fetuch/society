<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $users = User::select('id', 'email', 'department_id', 'membership_kind', 'membership_status')
      ->with(['profile' => function($query) {
        $query->select('id', 'user_id', 'first_name', 'last_name');
      }])
      ->with(['department' => function($query) {
        $query->select('id', 'name');
      }])
      ->get();

    return view('users', compact('users'));
  }
}
