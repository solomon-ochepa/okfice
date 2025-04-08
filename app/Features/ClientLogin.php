<?php

namespace App\Features;

class ClientLogin extends Feature
{
    /**
     * The feature's slug.
     */
    public string $name = 'client.login';

    /**
     * The feature's display title.
     */
    public string $title = 'Client Login';

    /**
     * The feature's description.
     */
    public string $description = 'Enables tenant to login/sign-in to the website.';
}
