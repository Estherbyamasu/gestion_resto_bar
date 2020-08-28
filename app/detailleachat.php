<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailleachat extends Model
{
    public function products()
    {
        return $this->BelongsTo('App\Product');
    } 
   
   
}