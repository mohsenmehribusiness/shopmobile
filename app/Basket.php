<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    public $guarded=['id'];
    protected $table='basket';
    /*	id 	name  */
    protected  $fillable=['name'];
    public function basketstatus()
    {
      return $this->hasMany(Basket-status::class,'basket_id');
    }
}
