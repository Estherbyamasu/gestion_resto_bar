<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailleachat extends Model
{
   protected $table='detailleachats';

    public function products()
    {
        return $this->BelongsTo('App\Product');
    } 
   
   
}