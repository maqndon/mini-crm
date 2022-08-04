<?php

namespace Tests;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function loginAsAdmin()
    {
        $admin = User::create(['name'=>'administrator','email'=>'admin@admin.com','password'=>Hash::make('password'),]);
        $this->actingAs($admin);

        return $admin;
    }

}
