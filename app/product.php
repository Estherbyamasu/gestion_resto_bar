<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
  public function category()
{
    return $this->belongsTo('App\Category');
} 

protected $table='products';
public function detailleachats()
    {
        return $this->hasMany('App\Detailleachat');
       // ->sum('quantite','prix')
    } 
  
}