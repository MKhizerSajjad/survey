<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counselor extends Model
{
    use HasFactory;
    protected $table = 'users';
    public static $snakeAttributes = false;

    protected $guarded;
}
