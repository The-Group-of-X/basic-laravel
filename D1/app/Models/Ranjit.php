<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranjit extends Model
{
    use HasFactory;

    protected $table = 'ranjits';

    protected $fillable = [
        'name',
        'email',
        'phone'
    ];
}
