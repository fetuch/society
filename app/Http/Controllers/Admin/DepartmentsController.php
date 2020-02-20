<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class DepartmentsController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        $departments = Department::select('id', 'name', 'president_id', 'secretary_id', 'paymaster_id')
            ->with(['president' => function($query) {
                $query->select('id');
                $query->with(['profile' => function($query) {
                    $query->select('user_id', 'first_name', 'last_name');
                }]);
            }])
            ->get();

        return view('admin.departments.index', compact('departments'));
    }
}
