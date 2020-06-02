<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Voyager;

class Product extends Model
{
    //
    public function get_cropped_image(){
    	$ext = strrchr($this->image, ".");
		$cropped_image = str_replace($ext, "-cropped".$ext, $this->image);
		return $cropped_image;
    }

    public function link(){
    	$slug = setting('site.product_slug');
    	if(empty($slug)){
    		$slug = 'product';
    	}
    	return '/' . $slug . '/' . $this->slug;
    }

    public function saves(){
        return $this->belongsToMany('App\User', 'product_saves');
    }

    public function categories(){
        return $this->belongsToMany(\TCG\Voyager\Models\Category::class);
    }

    public function productCategories(){
        return $this->belongsToMany(\TCG\Voyager\Models\Category::class);
    }

    public function related(){
        return $this->belongsToMany('App\Product', 'product_product', 'product_id', 'product2_id');
    }
}
