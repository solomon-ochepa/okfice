<?php

namespace App\Features;

class TenantIndexSearch extends Feature
{
    /**
     * The feature's slug.
     */
    public string $name = 'TenantIndexSearch';

    /**
     * The feature's display title.
     */
    public string $title = 'Search Tenants';

    /**
     * The feature's description.
     */
    public string $description = 'Add the ability to search for Tenants.';
}
