<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    /**
     * Get the category of service.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
