<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelAgent extends Model
{
    use HasFactory;

    public function contracts() {
        return $this->hasMany(Contract::class);
    }
}
