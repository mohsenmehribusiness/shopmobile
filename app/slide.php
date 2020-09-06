<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class slide extends Model
{
  public $guarded=['id'];
  protected $table='slide';
    protected  $fillable=['img','name','product_id'];
  /* img 	product_id 	title */
  public function product()
  {
    return $this->belongsTo(product::class);
  }
}