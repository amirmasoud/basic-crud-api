<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Sample extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'code',
        'status',
    ];

    protected $casts = [
        'status' => StatusEnum::class,
    ];


    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }
}
