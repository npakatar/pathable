<?php


namespace Npakatar\Pathable;

use Illuminate\Support\Str;

trait Pathable
{
    public function getPathAttribute()
    {
        return self::basePath() . '/'. $this->id;
    }

    public static function basePath()
    {
        return '/' . self::pathify();
    }

    private static function pathify()
    {
        return Str::plural(Str::kebab(class_basename(self::class)));
    }
}
