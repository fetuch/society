<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MembershipFee;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class MembershipFeesController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        $fees = MembershipFee::select('id', 'period', 'default', 'resident')->get();

        return view('admin.membershipFees.index', compact('fees'));
    }
}
