<?php

namespace App\Features;

class TenantShow extends Feature
{
    /**
     * The feature's slug.
     */
    public string $name = 'TenantShow';

    /**
     * The feature's display title.
     */
    public string $title = 'Show Tenant';

    /**
     * The feature's description.
     */
    public string $description = 'Ability to Show (View) a particular Tenant';
}
