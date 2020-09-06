<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class product extends Model{
    protected $table='products';
    public $guarded=['id'];
    protected $fillable = ['id','name','battery','modality','camera','internet','description','tag','tax_id',
        'description_','seen','Company_id','orde','commen','state'];
    public function images()
    {
        return $this->hasMany(Image::class,'product_id');
    }
    public function prices()
    {
        return $this->hasMany(price::class);
    }
    public function newprice()
    {
        $max=$this->prices->where('product_id',$this->id)->max('id');
        return $this->prices->where('id',$max)->pluck('price');
    }
    public function comments()
    {
        return $this->hasMany(comment::class);
    }
    public function  commenties(){
            return $this->comments->where('state1','1')->where('state','1')->where('comment_id',null);
    }
    public function company()
    {
        return $this->belongsTo(Company::class,'company_id');
    }
    public function categories() {
        return $this->belongsToMany(Category::class, 'products_categories');
    }
    public function orders() {
        return $this->belongsToMany(order::class, 'products_orders');}}
