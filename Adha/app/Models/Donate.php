<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    use HasFactory;
    public $table='donate';
    protected $fillable = [
        'id',
        'full_name',
        'phoneNb',
        'email',
        'amount',
        'comment',
    ];


}
