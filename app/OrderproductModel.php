<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class OrderproductModel extends Model
{
	public function product(){
      return $this->belongsTo('App\product');
  }
  public $guarded=['id','product_id'];
  protected $table='img';
  public $timestamps=false;
  protected  $fillable=['order_id','product_id',' pro_name ','pro_description','pro_price','pro_tax','quantity'];//??
  /* id	order_id	product_id	pro_name	pro_description	pro_price	pro_tax	quantity */
}
