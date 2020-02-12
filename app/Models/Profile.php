<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $guarded = [];

  protected $dates = [
      'joined_at',
      'created_at',
      'updated_at',
  ];
}
