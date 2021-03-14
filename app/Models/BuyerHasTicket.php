<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuyerHasTicket extends Model
{
    protected $fillable = [
        'buyer_id', 'ticket_type_id', 'amount',
    ];
    protected $guarder = ['id'];
}
