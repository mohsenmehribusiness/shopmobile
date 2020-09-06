<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';
    public $guarded=['id'];
    protected $fillable = ['name','email','phone','address'];
    public function products() {
        return $this->belongsToMany(product::class, 'products_orders');
    }
}
