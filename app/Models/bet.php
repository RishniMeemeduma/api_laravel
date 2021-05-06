<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bet extends Model
{
    use HasFactory;
    protected $table = 'bet';
    protected $fillable = ['stake_amount'];
    
//    function create(){
//        $th
//    }
}
