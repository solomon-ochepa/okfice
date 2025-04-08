<?php

namespace App\Features;

class ClientDelete extends Feature
{
    /**
     * The feature's slug.
     */
    public string $name = 'ClientDelete';

    /**
     * The feature's display title.
     */
    public string $title = 'Delete Clients';

    /**
     * The feature's description.
     */
    public string $description = 'The ability to delete, restore or permanently delete a Client.';
}
