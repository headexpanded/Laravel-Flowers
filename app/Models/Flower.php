<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flower extends Model
{
    use HasFactory;

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => strtoupper($value),
            set: fn ($value) => strtolower($value),
        );
    }

    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => '€' . ($value),
            set: fn ($value) => ($value),
        );
    }

    protected function getPriceNoSignAttribute()
    {
        return $this->attributes['price'];
    }

    protected function createdAt(): Attribute
    {
        return Attribute::make(

            get: fn ($value) => date('d M Y', strtotime($value)),
            set: fn ($value) => ($value),
        );
    }
}
