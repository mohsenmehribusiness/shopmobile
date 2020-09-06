<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
 public $guarded=['id'];
 protected $table='company';
 protected  $fillable=['name','description','logo'];
 /* */
 public function products()
 {
   return $this->hasMany(product::class);
 }
    public function count_product()
    {
        return $this->products()->count();
    }
 /*	*/
}
