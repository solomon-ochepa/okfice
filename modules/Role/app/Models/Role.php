<?php

namespace Modules\Role\App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use HasUuids, SoftDeletes;

    public function getRouteKeyName()
    {
        return 'name';
    }
}
