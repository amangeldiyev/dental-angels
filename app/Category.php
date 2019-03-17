<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
     /**
     * Get the services for the category.
     */
    public function services()
    {
        return $this->hasMany('App\Service', 'category_id', 'id');
    }
}
