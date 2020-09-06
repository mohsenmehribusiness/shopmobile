<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public $guarded=['id'];
  protected $table='comments';
  protected  $fillable=['email','description','name','product_id','comment_id','state1','state'];
  public function product()
  {
        return $this->belongsTo(product::class);
  }
  public function sub_commnet()
  {
        return Comment::where('comment_id',$this->id)->get();
  }
  /*id 	email 	description 	product_id 	name 	comment_id*/
}