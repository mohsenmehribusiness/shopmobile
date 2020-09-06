<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
  protected $table='prices';
  public $guarded=['id'];
  /*id	price product_id	*/

  public function product()
  {
    return $this->belongsTo(product::class);
  }
}
