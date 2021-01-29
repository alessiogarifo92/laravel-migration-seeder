<?php

namespace App\Http\Controllers;
use  App\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  public function index() {
      $employees = Employee::all();
      return view('pages.home', compact('employees'));
  }

  public function show($id)
  {
    // dd($id);
    $employee = Employee::findOrFail($id);
    return view('pages.employee', compact('employee'));
  }
}
