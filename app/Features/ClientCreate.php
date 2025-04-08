<?php

namespace App\Features;

class ClientCreate extends Feature
{
    /**
     * The feature's slug.
     */
    public string $name = 'ClientCreate';

    /**
     * The feature's display title.
     */
    public string $title = 'Create Client';

    /**
     * The feature's description.
     */
    public string $description = 'Has the ability to create new Client.';
}
