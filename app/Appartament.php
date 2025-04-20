<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Traits\Resizable;


class Appartament extends Model
{
    use Translatable;
	protected $translatable = ['title' , 'seo_title' , 'text1' , 'text2' , 'size' , 'places' , 'keywords' , 'description'];

    use Resizable;

	public function getWebpImageAttribute()
    {
        return str_replace('.' . pathinfo(\Voyager::image($this->image),PATHINFO_EXTENSION), '.webp', \Voyager::image($this->image));
    }
}
