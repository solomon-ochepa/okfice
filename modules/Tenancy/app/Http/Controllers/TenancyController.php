<?php

namespace Modules\Tenancy\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Tenancy\App\Models\Client;
use Modules\User\App\Models\User;
use Stancl\Tenancy\Features\UserImpersonation;

class TenancyController extends Controller
{
    /**
     * Display the tenancy landing page.
     */
    public function home()
    {
        return view('tenancy::welcome');
    }

    /**
     * Display the tenancy landing page.
     */
    public function dashboard()
    {
        return view('tenancy::dashboard');
    }

    /**
     * Impersonate a client user from the central domain
     */
    public function login_as_client_user(Client $client, User $user)
    {
        $redirectUrl = '/dashboard';

        $token = tenancy()->impersonate($client, $user->id, $redirectUrl);
        $url = $client->subdomain->url;

        return redirect()->away(url("//$url/login/{$token->token}"));
    }

    /**
     * Log in as a user on the client's domain
     */
    public function login_as(string $token)
    {
        return UserImpersonation::makeResponse($token);
    }
}
