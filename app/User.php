<?php

namespace App;

use App\Models\Department;
use App\Models\MembershipPayment;
use App\Models\Profile;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return HasOne
     */
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    /**
     * @param $data
     * @return Model
     */
    public function createProfile($data)
    {
        return $this->profile()->create($data);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * @return HasMany
     */
    public function membership_payments()
    {
        return $this->hasMany(MembershipPayment::class, 'member_id');
    }
}
