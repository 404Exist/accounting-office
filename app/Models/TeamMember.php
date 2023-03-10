<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\Traits\ForgetCache;

class TeamMember extends Model
{
    use ForgetCache;
    use HasFactory;

    protected $fillable = [
        'name',
        'picture',
        'order',
    ];

    public function picture(): Attribute
    {
        return Attribute::get(function (string $value) {
            return asset("storage/admin/team/members/{$value}");
        });
    }
}
