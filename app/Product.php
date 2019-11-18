<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['designation', 'prix_achat','prix_vente','tva','famille'];
    public function categories()
    {
        return $this->belongsTo('App\Category');
    }
}
