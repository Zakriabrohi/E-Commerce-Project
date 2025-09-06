<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{

    use HasFactory ;
    protected $table =  'orders';

    protected $fillable = [
        'user_id', 'product_id', 'address', 'payment_method', 'status',
        'payment_status'
    ];
     public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
{
    return $this->belongsTo(User::class, 'user_id', 'id');
}


    /**
     * Get the user that owns the order
     */

    public $timestamps=true;

}
