<?php

namespace Modules\Tenancy\App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Modules\Tenancy\Database\Factories\DomainFactory;
use Stancl\Tenancy\Database\Models\Domain as BaseDomain;

class Domain extends BaseDomain
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'domain',
        'tenant_id',
    ];

    protected static function newFactory()
    {
        return DomainFactory::new();
    }

    /**
     * Get a well formatted URL from domain
     */
    public function url(): Attribute
    {
        return Attribute::get(fn () => Str::contains($this->domain, '.')
            ? $this->domain
            : $this->domain.'.'.Str::after(config('app.url'), '://'));
    }
}
