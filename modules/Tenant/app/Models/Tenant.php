<?php

namespace Modules\Tenant\App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Domain\App\Models\Domain;
use Modules\Tenant\Database\Factories\TenantFactory;
use Modules\User\App\Models\User;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains, HasFactory, HasUuids, Sluggable, SoftDeletes;

    protected $table = 'tenants';

    /**
     * Get Custom columns (that wouldn't be stored in the data JSON column)
     */
    public static function getCustomColumns(): array
    {
        return [
            'id',
            'name',
            'slug',
            'user_id',
            'subscription_id',
            'created_at',
            'updated_at',
            'deleted_at',
        ];
    }

    protected static function newFactory()
    {
        return TenantFactory::new();
    }

    /**
     * Get the sluggable attributes.
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the user that owns the tenant.
     */
    public function admin()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the tenant's primary domain.
     */
    public function domain(): Attribute
    {
        $domain = $this->hasOne(Domain::class)->whereRaw("domain LIKE '%.%'")->first();

        return Attribute::make(
            get: fn () => $domain ?? $this->subdomain,
        );
    }

    /**
     * Get the tenant's default subdomain.
     */
    public function subdomain()
    {
        return $this->hasOne(Domain::class)->whereRaw("domain NOT LIKE '%.%'");
    }

    /**
     * Check if the database exists.
     *
     * @return bool Returns true if the database exists, otherwise false.
     */
    public function database_exists(): bool
    {
        return $this->database()->manager()->databaseExists($this->database()->getName());
    }
}
