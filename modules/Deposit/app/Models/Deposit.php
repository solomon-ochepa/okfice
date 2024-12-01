<?php

namespace Modules\Deposit\App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Deposit\Database\Factories\DepositFactory;

class Deposit extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): DepositFactory
    // {
    //     // return DepositFactory::new();
    // }
}
