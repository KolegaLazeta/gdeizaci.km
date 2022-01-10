<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parties extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('\App\Models\User', 'user_id');
    }
    public function place()
    {
        return $this->belongsTo('\App\Models\Places', 'place_id');
    }
    public function musician()
    {
        return $this->belongsTo('\App\Models\Musicians', 'musician_id');
    }
}
