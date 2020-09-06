<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $table='categories';
    public $guarded=['id'];
  protected  $fillable=['name','cat_id','product_id'];
    public function products() {
        return $this->belongsToMany(product::class, 'products_categories');
    }
    public function sub_cat()
    {
        return Category::where('cat_id',$this->id)->get();
    }

    public function mother()
    {
        return Category::where('id',$this->cat_id)->first();
    }
}