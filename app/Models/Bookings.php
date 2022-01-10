<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('\App\Models\User', 'user_id');
    }

    public function party()
    {
        return $this->belongsTo('\App\Models\Parties', 'party_id');
    }
}
