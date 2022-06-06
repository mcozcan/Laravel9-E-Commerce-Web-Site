<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    #many to one
    public function category() {

        return $this->belongsTo((Category::class));
     
  
        return $this->hasMany(Comment::class);
    }

    public function comment() {

       
      
        return $this->hasMany(Comment::class);
    
    }

    public function shopcart() {
        return $this->hasMany(ShopCart::class);
    }

    public function orderproduct() {
        return $this->hasMany(OrderProductt::class);
    }
}
