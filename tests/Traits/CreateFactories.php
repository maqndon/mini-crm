<?php

namespace Tests\Traits;

use App\Models\User;
use App\Models\Company;
use App\Models\Employee;

trait CreateFactories
{

    public function CreateFactories():void
    {
        $this->user = User::factory()->create();
        
        $this->company = Company::factory()->create();
        
        $this->employee = Employee::factory()->create(['company_id' => $this->company->id]);
    }

}

