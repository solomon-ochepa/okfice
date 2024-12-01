<?php

namespace Modules\Status\App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Status\Database\Factories\StatusFactory;

class Status extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'slug',
        'name',
    ];

    /**
     * The primary key associated with the table.
     */
    protected $primaryKey = 'slug';

    /**
     * Indicates if the model should be timestamped.
     */
    public $timestamps = false;

    /**
     * Generate a SEO friendly slug from the title
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ]
        ];
    }

    protected static function newFactory(): StatusFactory
    {
        return StatusFactory::new();
    }
}
