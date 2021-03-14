<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuyerHasTicket extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'buyer_id', 'ticket_type_id', 'amount',
    ];

    /**
     * The attributes that should be guarder for arrays.
     *
     * @var array
     */
    protected $guarder = ['id'];

    /**
     * Get the ticket associated with the BuyerHasTicket
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ticket(): HasOne
    {
        return $this->hasOne(TicketType::class, 'id', 'ticket_type_id');
    }
}
