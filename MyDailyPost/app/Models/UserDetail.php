<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    public function getAddress()
    {
        return $this->hasOne(Address::class, 'address_id', 'id');
    }
}
