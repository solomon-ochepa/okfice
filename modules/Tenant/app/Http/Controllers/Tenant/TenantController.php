<?php

namespace Modules\Tenant\App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Stancl\Tenancy\Features\UserImpersonation;

class TenantController extends Controller
{
    /**
     * Display the tenancy landing page.
     */
    public function home()
    {
        return view('tenant::welcome');
    }

    /**
     * Display the tenancy landing page.
     */
    public function dashboard()
    {
        return view('tenant::dashboard');
    }

    /**
     * Log in as a user on the tenant's domain
     */
    public function login_as(string $token)
    {
        return UserImpersonation::makeResponse($token);
    }
}
