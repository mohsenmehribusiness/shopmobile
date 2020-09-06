<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  public $guarded=['id'];
  protected $table='images';
    protected  $fillable=['img','title'];
  /* img 	product_id 	title */
  public function product()
  {
    return $this->belongsTo(product::class);
  }
}