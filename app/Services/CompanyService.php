<?php

namespace App\Services;

use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CompanyService
{

    public function createCompany(Request $request): Company
    {

        $imageDir = 'public/images';

        $company = Company::create([
            'name' => $request->name, 
            'email' => $request->email, 
            'website' => $request->website,
            'logo' => $request->hasFile('logo')
                ? $request->file('logo')
                    ->storeAs(
                        $imageDir,
                        'logo_' . Str::of($request->name)->slug . '.' . $request->logo->extension()
                        )
                : $imageDir.'/default.png'
        ]);
        return $company;
    }
}