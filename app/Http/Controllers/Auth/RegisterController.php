<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    function createUser(Request $request) {

        $validated = $request->validate([
            'name' => 'required|unique:tenants,id|max:255'
        ]);

        $tenant = Tenant::create([
            'id' => $request['name']
        ]);

        $domain = $request['name'] . '.' . config('app.url');
        $tenant->domains()->create(['domain' => $domain]);
        
        Session::put('domain', $domain);
        return redirect('thank-you');

    }

    public function appreciation() {
        $domain = Session::get('domain');

        return view('thank-you', ['domain' => $domain]);
    }
}
