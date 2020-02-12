<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  protected $guarded = [];

  public function members()
  {
      return $this->hasMany(User::class);
  }

  public function membership_payments()
  {
      return $this->hasManyThrough(MembershipPayment::class, User::class, 'department_id', 'member_id');
  }
}
