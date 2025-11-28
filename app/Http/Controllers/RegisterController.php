<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'email'        => 'required|email|unique:tenants,email',
            'phonenumber'  => 'nullable',
            'password'     => 'required|min:6|confirmed',
        ]);

        // Create Tenant
        $tenant = Tenant::create([
            'name'              => $request->company_name,
            'email'             => $request->email,
            'phone'             => $request->phonenumber,
            'subscription_type' => 'monthly',
            'is_trial'          => true,
            'trial_ends_at'     => now()->addDays(14),
            'status'            => 'active',
        ]);

        // Create Admin User for that Tenant
        $user = User::create([
            'tenant_id' => $tenant->id,
            'name'      => $request->company_name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'role'      => 'admin',
        ]);

        auth()->login($user);

        return redirect()->route('login');
    }
}
