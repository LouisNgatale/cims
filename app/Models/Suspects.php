<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suspects extends Model
{
    use HasFactory;

    public function cases() {
        return $this->hasMany(Cases::class);

    }
}
