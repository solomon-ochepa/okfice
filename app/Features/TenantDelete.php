<?php

namespace App\Features;

class TenantDelete extends Feature
{
    /**
     * The feature's slug.
     */
    public string $name = 'TenantDelete';

    /**
     * The feature's display title.
     */
    public string $title = 'Delete Tenants';

    /**
     * The feature's description.
     */
    public string $description = 'The ability to delete, restore or permanently delete a Tenant.';
}
