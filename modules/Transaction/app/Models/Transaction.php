<?php

namespace Modules\Transaction\App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Transaction\Database\Factories\TransactionFactory;

class Transaction extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'type_id',
        'session_id',
        'description',
        'status',
        'created_by',
        'date',
    ];

    protected static function newFactory(): TransactionFactory
    {
        return TransactionFactory::new();
    }

    public function entries()
    {
        return $this->hasMany(TransactionEntry::class);
    }
}
