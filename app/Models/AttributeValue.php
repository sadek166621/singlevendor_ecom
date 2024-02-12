<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function attribute(){
        return $this->belongsTo(Attribute::class,'attribute_id','id');
    }

    public function productPrices()
    {
        return $this->belongsToMany(ProductPrice::class);
    }

    
}
