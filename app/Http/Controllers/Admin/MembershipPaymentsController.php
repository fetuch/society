<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\MembershipPayment;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class MembershipPaymentsController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        $payments = MembershipPayment::confirmed()
            ->select('id', 'member_id', 'amount', 'paid_at')
            ->with(['member' => function ($query) {
                $query->select('id', 'department_id', 'membership_kind');

                $query->with(['profile' => function ($query) {
                    $query->select('user_id', 'first_name', 'last_name');
                }]);

                $query->with(['department' => function ($query) {
                    $query->select('id', 'name');
                }]);
            }])
            ->get();

        return view('admin.membership_payments.index', compact('payments'));
    }

    public function dashboard($period = null)
    {
        if (!$period) $period = date('Y');

        $departments = Department::select('id', 'name')
            ->with(['members' => function ($query) use ($period) {
                $query->select('id', 'department_id')
                    ->whereHas('profile', function ($query) use ($period) {
                        $query->select('id')->whereYear('joined_at', '<=', $period);
                    });
            }])
            ->with(['membership_payments' => function ($query) use ($period) {
                $query->confirmed()
                    ->select('membership_payments.id', 'member_id', 'period', 'amount')
                    ->wherePeriod($period);
            }])
            ->get();

//        dd($departments->toArray());
        return view('admin.membership_payments.dashboard', compact('departments'));
    }
}
