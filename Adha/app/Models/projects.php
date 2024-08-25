<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;
    public $table='projects';
    protected $fillable = [
        'id',
        'image',
        'text',
        'title',
    ];
}
