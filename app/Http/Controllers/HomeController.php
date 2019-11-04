<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showEmployeePage(){

        $employees = DB::table('employees')->get();
        $sal_grps = DB::table('salary_groups')->get();
        return view('employee.employee_manage',compact(['employees','sal_grps']));

    }

    public function showSalaryGroupPage(){

        $salary_groups = DB::table('salary_groups')->get();
        $fixall = DB::table('fixed-allowances')->get();
        $fixded = DB::table('fixed-deductions')->get();
        return view('employee.salary_group',compact(['salary_groups','fixall','fixded']));

    }

    public function showSalaryManagePage(){

        $users = DB::table('employees')
            ->join('salary_groups', 'employees.sal_grp', '=', 'salary_groups.name')->get();

        
            

        return view('employee.sal_manage',compact('users'));

    }
}
