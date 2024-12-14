<?php

namespace Modules\Transaction\App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// use Modules\Transaction\Database\Factories\TransactionTypeFactory;

class TransactionType extends Model
{
    use HasFactory, HasUuids, Sluggable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        '',
    ];

    /**
     * Generate a SEO friendly slug from the title
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    // protected static function newFactory(): TransactionTypeFactory
    // {
    //     // return TransactionTypeFactory::new();
    // }
}
