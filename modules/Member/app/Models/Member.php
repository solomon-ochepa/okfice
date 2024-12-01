<?php

namespace Modules\Member\App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Group\App\Models\Group;
use Modules\User\App\Models\User;

// use Modules\Member\Database\Factories\MemberFactory;

class Member extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'number',
        'status',
        'name',
        'user_id',
        'group_id',
    ];

    // protected static function newFactory(): MemberFactory
    // {
    //     // return MemberFactory::new();
    // }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
