<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MembershipPayment extends Model
{
    protected $guarded = [];

    protected $dates = [
        'created_at',
        'updated_at',
        'paid_at',
    ];

    /**
     * @param $query
     * @return mixed
     */
    public function scopeConfirmed($query)
    {
        return $query->where('confirmed', true);
    }

    /**
     * @return BelongsTo
     */
    public function member()
    {
        return $this->belongsTo(User::class, 'member_id');
    }
}
