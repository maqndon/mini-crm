<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Models\User;
use App\Models\Company;
use App\Models\Employee;

class EmployeeControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    
    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();

        $this->company = Company::factory()->create();

        $this->employee = Employee::factory()->create(['company_id' => $this->company->id]);
    }

    public function test_route_employees_index_can_be_rendered(): void
    {
        $this->withoutExceptionHandling();

        $this->actingAs($this->user);

        $response = $this->get('/employees');

        $response->assertOk();
    }

    public function test_route_employees_create_can_be_rendered()
    {
        $this->actingAs($this->user);

        $response = $this->get('/employees/create');

        $response->assertOk();
    }

    public function test_route_employees_edit_can_be_rendered()
    {
        $this->withoutExceptionHandling();

        $this->actingAs($this->user);

        $response = $this->get('/employees/'.$this->employee->id.'/edit');

        $response->assertOk();
    }

    public function test_a_employee_can_be_deleted()
    {
       $this->withoutExceptionHandling();

       $this->actingAs($this->user);

       $response = $this->delete('/employees/'.$this->employee->id);

       $response->assertRedirect();
    }

    public function test_a_employee_can_be_stored()
    {
       $this->withoutExceptionHandling();

       $this->actingAs($this->user);

       $response = $this->post('/employees', [
            'first_name' => 'name',
            'last_name' => 'last',
            'email' => 'test@employee.com',
            'phone' => '0123456789',
            'company_id' => $this->company->id,
       ]);

       $response->assertRedirect();
    }
}
