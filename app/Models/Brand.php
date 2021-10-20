<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    
    protected $fillable=["Brand_name",'Brand_img','Cat_id','User'];
    use HasFactory;
    public function User()
    {
        return $this->hasOne(User::class,'id','User');
    }
      public function Category()
    {
        return $this->hasOne(Category::class,'id','Cat_id');
    }

    
}
