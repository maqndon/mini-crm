<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Company;
use App\Models\Employee;

class CompanyModelTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_company_has_many_employees_relation()
    {
        $company = Company::factory()->create();
        Employee::factory(5)->create(['company_id' => $company->id]);

        $this->assertInstanceOf(Employee::class, $company->employees->first());

    }
}
