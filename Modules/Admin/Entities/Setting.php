<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Entities\Traits\ForgetCache;

class Setting extends Model
{
    use ForgetCache;
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
    ];
}
