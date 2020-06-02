<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function parent_id(){
    	return $this->belongsTo(Category::class);
    }

  	public function products(){
  		return $this->belongsToMany(Product::class);
  	}
}
