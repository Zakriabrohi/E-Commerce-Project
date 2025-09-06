<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';


    protected $fillable = [
        'name', 'Discription', 'price', 'Gallery',
        'Category'
    ];

     public function orders()
    {
        return $this->hasMany(order::class);
    }


    // use HasFactory;
}
