<?php

namespace Modules\Account\App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Account\Database\Factories\AccountFactory;
use Modules\Transaction\App\Models\Transaction;
use Modules\User\App\Models\User;

class Account extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'number',
        'name',
        'amount',
        'currency',
        'primary',
    ];

    protected static function newFactory(): Factory
    {
        return AccountFactory::new();
    }

    public function number(): Attribute
    {
        return Attribute::get(fn($key, $account) => str_pad($account['number'], max(3, strlen($account['number'])), '0', STR_PAD_LEFT));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
