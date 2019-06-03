<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';

    public function details()
    {
        return $this->hasMany('App\SaleDetails');
    }
}
