<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flower extends Model
{
    use HasFactory;
    // protected $casts = [
    //     'created_at' => 'datetime:d m yyyy'
    // ];
    // protected $dateFormat = 'U';





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

    protected function priceNoSign(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ($value),
            set: fn ($value) => ($value),
        );
    }

    protected function created_at(): Attribute
    {
        return Attribute::make(

            get: fn ($value) => Date('d-m-yyyy', $value),
            set: fn ($value) => ($value),
        );
    }
}
