<?php

namespace App\Models;

use App\User;
use Facade\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = [];

    private $roleMap = [
        'Prezes Oddziału' => 'president_id',
        'Sekretarz Oddziału' => 'secretary_id',
        'Skarbnik Oddziału' => 'paymaster_id',
        'Prezes Elekt Oddziału' => 'next_president_id',
        'Były Prezes Oddziału' => 'prev_president_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function members()
    {
        return $this->hasMany(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function membership_payments()
    {
        return $this->hasManyThrough(MembershipPayment::class, User::class, 'department_id', 'member_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function president()
    {
        return $this->hasOne(User::class, 'id', 'president_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function secretary()
    {
        return $this->hasOne(User::class, 'id', 'secretary_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paymaster()
    {
        return $this->hasOne(User::class, 'id', 'paymaster_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function prevPresident()
    {
        return $this->hasOne(User::class, 'id', 'prev_president_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function nextPresident()
    {
        return $this->hasOne(User::class, 'id', 'next_president_id');
    }

    public function assignRoleToUser($roleName, User $user)
    {
        // if role is already taken, revoke it
        if ($this->{$this->roleMap[$roleName]}) {
            try {
                $u = User::findOrFail($this->{$this->roleMap[$roleName]});

                $u->removeRole(['Członek Zarządu Towarzystwa', $roleName]);

                $this->{$this->roleMap[$roleName]} = null;

                // update society positions history
            } catch (NotFound $exception) {
                info($exception);
            }
        }

        $this->{$this->roleMap[$roleName]} = $user->id;

        $this->save();

        $user->assignRole(['Członek Zarządu Towarzystwa', $roleName]);

        // update society positions history
    }

}
