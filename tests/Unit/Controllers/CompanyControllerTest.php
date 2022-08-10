<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Models\User;
use App\Models\Company;
use Tests\CreatesApplication;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CompanyControllerlTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    use RefreshDatabase, CreatesApplication;

    // public $user;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();

        $this->company = Company::factory()->create();
    }

    public function test_route_companies_index_can_be_rendered(): void
    {
        $this->withoutExceptionHandling();

        $this->actingAs($this->user);

        $response = $this->get('/companies');

        $response->assertOk();
    }

    public function test_route_companies_create_can_be_rendered()
    {
        $this->actingAs($this->user);

        $response = $this->get('/companies/create');

        $response->assertOk();
    }

    public function test_route_companies_edit_can_be_rendered()
    {
        $this->withoutExceptionHandling();

        $this->actingAs($this->user);

        $this->company->id;

        $response = $this->get('/companies/'.$this->company->id.'/edit');

        $response->assertOk();
    }

    public function test_a_company_can_be_deleted()
    {
       $this->withoutExceptionHandling();

       $this->actingAs($this->user);

       $response = $this->delete('/companies/'.$this->company->id);

       $response->assertRedirect();
    }

       public function test_a_company_can_be_stored()
       {
          $this->withoutExceptionHandling();

          $this->actingAs($this->user);

          $this->logo = UploadedFile::fake()->image('images/logo.png', 100, 100);

          $response = $this->post('/companies', [
             'name' => 'Company Test',
             'email' => 'test@company.com',
             'logo' => $this->logo,
             'website' => 'https://www.company.com',
    
          ]);

          $response->assertRedirect();
       }

}
