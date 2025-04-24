<?php

namespace App\Features;

class TenantCreate extends Feature
{
    /**
     * The feature's slug.
     */
    public string $name = 'TenantCreate';

    /**
     * The feature's display title.
     */
    public string $title = 'Create Tenant';

    /**
     * The feature's description.
     */
    public string $description = 'Has the ability to create new Tenant.';
}
