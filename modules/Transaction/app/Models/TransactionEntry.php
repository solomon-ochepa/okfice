<?php

namespace Modules\Transaction\App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Account\App\Models\Account;
use Modules\Transaction\Database\Factories\TransactionEntryFactory;

class TransactionEntry extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'transaction_id',
        'account_id',
        'entry_type',
        'amount',
    ];

    protected static function newFactory(): TransactionEntryFactory
    {
        return TransactionEntryFactory::new();
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
