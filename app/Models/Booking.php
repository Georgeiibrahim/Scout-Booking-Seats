<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'seat_id',
        'ref_no',
        'activated_at',
        'qr_code',
        'status',
        'level',
        'cost',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }
}
