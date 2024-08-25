<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leadership extends Model
{
    use HasFactory;
    public $table='leadership';
    protected $fillable = [
        'id',
        'image',
        'name',
        'position',
        'text',
    ];
}
