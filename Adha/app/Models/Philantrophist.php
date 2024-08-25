<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Philantrophist extends Model
{
    use HasFactory;
    public $table='philantrophist';
    protected $fillable = [
        'id',
        'image',
        'text',
        'name',
    ];
}
