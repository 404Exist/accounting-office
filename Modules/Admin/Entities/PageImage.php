<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Entities\Traits\ForgetCache;

class PageImage extends Model
{
    use ForgetCache;
    use HasFactory;

    protected $fillable = [
        'name',
        'page_name',
        'order',
    ];

    public function url(): Attribute
    {
        return Attribute::get(function () {
            return asset("storage/admin/pages/{$this->name}");
        });
    }
}
