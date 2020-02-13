<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class MembershipPaymentsDashboardController extends Controller
{
    /**
     * @param null $period
     * @return Factory|View
     */
    public function index($period = null)
    {
        if (! $period) {
            $period = date('Y');
        }

        $departments = Department::select('id', 'name')->with([
            'members' => function ($query) use ($period) {
                $query->select('id', 'department_id')->whereHas('profile', function ($query) use ($period) {
                    $query->select('id')->whereYear('joined_at', '<=', $period);
                });
            },
        ])->with([
            'membership_payments' => function ($query) use ($period) {
                $query->confirmed()->select('membership_payments.id', 'member_id', 'period', 'amount')->wherePeriod($period);
            },
        ])->get();

        return view('admin.membership_payments.dashboard', compact('departments'));
    }
}
