<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_form extends Model
{    protected $fillable=['name','email','subject','message'];
    use HasFactory;
}
