<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = [
        'ref_no',
        'x_factor',
        'y_factor',
        'status_g',
        'status_f',
        
    ];
}
