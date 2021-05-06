<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    protected $table = 'player';
    protected $fillable = ['id','name'];

use HasFactory;
}
