<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Company;
use App\Models\Employee;

class EmployeeModelTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_an_employee_has_belogs_to_company_relation()
    {
        $company = Company::factory()->make();
        $employee = Employee::factory()->make(['company_id' => $company->id]);

        $this->assertEquals($company->id, $employee->company_id);
    }
}
