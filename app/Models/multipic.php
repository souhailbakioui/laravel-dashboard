<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multipic extends Model
{
    
   protected $fillable=["image",'id_Brand'];
    use HasFactory;
    public function brand()
    {
       return $this->hasOne(Brand::class,'id','id_Brand');
    }
}
