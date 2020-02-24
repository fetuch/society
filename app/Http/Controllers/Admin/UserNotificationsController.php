<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    public function store(User $user, Request $request)
    {
        info($user);
        info($request->all());

        return ['message' => route('admin.users.index')];
    }
}
