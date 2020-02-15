<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class CalendarController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('admin.calendar.index');
    }
}
