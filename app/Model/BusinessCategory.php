<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessCategory extends Model
{
    use SoftDeletes;
    protected $table = 'business_categories';

    public function getBusiness()
    {
        return $this->hasMany('App\Model\Business','business_categoryId','id');
    }

    public function getProducts()
    {
        return $this->hasMany('App\Model\Product','businessId','id');
    }
}