<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
  public $guarded=['id'];
  protected $table='about';
  protected  $fillable=['about','url','name','address','telegram','phone','phone_','seen','fax','email','instagram','name'];
  /*id 	URL 	telegram 	phone 	phone_fix 	seen 	date*/
    /*'about','url','name','address','telegram','phone','phone_','seen','fax','email','instagram','name'*/
}
