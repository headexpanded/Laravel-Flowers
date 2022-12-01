<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomUser extends Model
{
    use HasFactory;

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ($value),
            set: fn ($value) => ($value),
        );
    }

    protected function email(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ($value),
            set: fn ($value) => ($value),
        );
    }

    protected function createdAt(): Attribute
    {
        return Attribute::make(

            get: fn ($value) => date('d M Y', strtotime($value)),
            set: fn ($value) => ($value),
        );
    }

    protected function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($this->password);
    }

    protected $table = "users";
}
