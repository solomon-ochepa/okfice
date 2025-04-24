<?php

namespace App\Features;

class TenantLogin extends Feature
{
    /**
     * The feature's slug.
     */
    public string $name = 'tenant.login';

    /**
     * The feature's display title.
     */
    public string $title = 'Tenant Login';

    /**
     * The feature's description.
     */
    public string $description = 'Enables tenant to login/sign-in to the website.';
}
