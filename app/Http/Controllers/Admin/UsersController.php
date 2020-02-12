<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class UsersController extends Controller
{
    /**
     * @return Factory|View
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

    return view('admin.users.index', compact('users'));
  }

  public function show(User $user)
  {
      $user->load(['membership_payments' => function($query) {
          $query
              ->confirmed()
              ->select('id', 'member_id', 'confirmed', 'period');
      }]);

      return view('admin.users.show', compact('user'));
  }
}
