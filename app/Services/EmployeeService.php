<?php

namespace App\Services;

use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EmployeeService
{

    public function createEmployee(Request $request): Employee
    {

        $employee = Employee::create([
            'first_name' => $request->first_name, 
            'last_name' => $request->last_name, 
            'email' => $request->email, 
            'phone' => $request->phone,
            'company_id' => $request->company_id,
        ]);

        return $employee;
    }
}