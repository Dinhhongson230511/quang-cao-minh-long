<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts(){
    	return $this->hasMany('Wave\Post');
    }

    public function children()
    {
        return $this->hasMany('Wave\Category', 'parent_id', 'id')->orderBy('name');
    }

    public static function tree()
    {
        return static::with(implode('.', array_fill(0, 100, 'children')))->whereNull('parent_id')->get();
    }
}
