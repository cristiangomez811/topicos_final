<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleDetails extends Model
{
    protected $table = 'sale_details';

    public function sale()
    {
        return $this->belongsTo('App\Sale');
    }
}
