<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketType extends Model
{
    protected $fillable = [
        'ticket_id', 'type', 'amount','value'
    ];
    protected $guarder = ['id'];
}
