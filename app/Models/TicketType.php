<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ticket_id', 'type', 'amount','value'
    ];

    /**
     * The attributes that should be guarder for arrays.
     *
     * @var array
     */
    protected $guarder = ['id'];

    /**
     * Get the ticket associated with the TicketType
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ticket(): HasOne
    {
        return $this->hasOne(Ticket::class, 'ticket_id', 'id');
    }
}
