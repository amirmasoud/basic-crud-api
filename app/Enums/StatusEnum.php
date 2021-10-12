<?php

namespace App\Enums;

use Closure;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self ACTIVE()
 * @method static self INACTIVE()
 */
final class StatusEnum extends Enum
{
    protected static function values(): Closure
    {
        return static function (string $name): string {
            return mb_strtolower($name);
        };
    }

    protected static function labels(): Closure
    {
        return static function (string $name): string {
            return ucfirst(mb_strtolower(str_replace('_', ' ', $name)));
        };
    }
}
