<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_about extends Model
{    protected $fillable=["title",'short_dis','long_dis'];
    use HasFactory;
}
