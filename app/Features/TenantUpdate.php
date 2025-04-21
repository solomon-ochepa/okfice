<?php

namespace App\Features;

class TenantUpdate extends Feature
{
    /**
     * The feature's slug.
     */
    public string $name = 'TenantUpdate';

    /**
     * The feature's display title.
     */
    public string $title = 'Update Tenant';

    /**
     * The feature's description.
     */
    public string $description = 'The ability to update a Tenant.';
}
