<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class City extends Model
{
    protected $fillable = [
        'name',
        'photo',
        'slug'
    ];

    protected static function boot()
{
    parent::boot();

    static::creating(function ($city) {
        $city->slug = Str::slug($city->name);
    }
);
}

}
