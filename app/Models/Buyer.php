<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $fillable = [
        'id_card', 'name', 'email',
    ];
    protected $guarder = ['id'];
}
