<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class EmployeesController extends Controller
{
    public function index()
    {
        // DB::table()なし
        //$employees = DB::table('employees')->get();
        $employees = Employee::all();

        return view('employees.index', ['employees' => $employees]);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        // comment out
        // DB::table()なし
        //DB::table('employees')->insert([
        //    'employee_name' => $request->input('employee_name'),
        //    'section' => $request->input('section'),
        //    'salary' => $request->input('salary'),
        //]);
        // add
        $employee = new Employee;
        $employee->employee_name = $request->input('employee_name');
        $employee->section = $request->input('section');
        $employee->salary = $request->input('salary');
        $employee->save();
        // addend
        return view('employees.store');
    }
}
