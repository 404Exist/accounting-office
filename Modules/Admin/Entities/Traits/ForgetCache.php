<?php

namespace Modules\Admin\Entities\Traits;

trait ForgetCache
{
    public static function boot()
    {
        parent::boot();

        self::created(fn () => static::forgetCache());
        self::updated(fn () => static::forgetCache());
    }

    protected static function forgetCache()
    {
        return cache()->forget((new self())->getTable());
    }
}
