<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Basketstatus extends Model
{
  public $guarded=['id'];
  protected $table='basket_status';
  protected  $fillable=['description','basket_id','status'];

  public function basket()
  {
      return $this->belongsToMany(Basket::class);
  }
  /*'id', 	'description ','	basket_id ','	'role' */


}
