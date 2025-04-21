<?php

namespace Modules\Tenant\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Tenant\App\Models\Tenant;
use Modules\User\App\Models\User;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Show the specified resource.
     */
    public function show($id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {}

    /**
     * Impersonate a tenant user from the central domain
     */
    public function login_as_tenant_user(Tenant $tenant, User $user)
    {
        $redirectUrl = '/dashboard';

        $token = tenancy()->impersonate($tenant, $user->id, $redirectUrl);
        $url = $tenant->subdomain->url;

        return redirect()->away(url("//$url/login/{$token->token}"));
    }
}
