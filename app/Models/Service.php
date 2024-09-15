<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class Service extends Model
{
    public function image_url(){
    	return Voyager::image($this->image);
    }
}
