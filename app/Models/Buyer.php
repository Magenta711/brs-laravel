<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_card', 'name', 'email',
    ];

    /**
     * The attributes that should be guarder for arrays.
     *
     * @var array
     */
    protected $guarder = ['id'];

    /**
     * Get all of the tikes for the Buyer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tikes(): HasMany
    {
        return $this->hasMany(BuyerHasTicket::class, 'buyer_id', 'id');
    }
}
