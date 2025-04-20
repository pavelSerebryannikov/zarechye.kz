<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;


class Photo extends Model
{
    use Resizable;

	public function getWebpImageAttribute()
    {
        return str_replace('.' . pathinfo(\Voyager::image($this->image),PATHINFO_EXTENSION), '.webp', \Voyager::image($this->image));
    }
}
