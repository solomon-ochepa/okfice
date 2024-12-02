<?php

namespace Modules\User\App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Laravel\Pennant\Concerns\HasFeatures;
use Modules\Address\App\Models\Address;
use Modules\Submission\App\Models\Submission;
use Modules\Transaction\App\Models\Transaction;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use /*HasApiTokens,*/ HasFactory, HasFeatures, HasPermissions, HasRoles, HasUuids, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'username',
        'phone',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // protected static function newFactory(): UserFactory
    // {
    //     // return UserFactory::new();
    // }

    public function name(): Attribute
    {
        return Attribute::get(fn() => $this->first_name . ' ' . $this->last_name);
    }

    // public function addresses()
    // {
    //     return $this->morphToMany(Address::class, 'addressable');
    // }

    /**
     * Get User's recent transactions
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class)->latest();
    }
}
