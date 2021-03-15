<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'date_time', 'address',
    ];

    /**
     * The attributes that should be guarder for arrays.
     *
     * @var array
     */
    protected $guarder = ['id'];

    /**
     * Get all of the types for the Ticket
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function types()
    {
        return $this->hasMany(TicketType::class, 'ticket_id', 'id');
    }
}
