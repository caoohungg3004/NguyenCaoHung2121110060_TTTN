<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='2121110052_product';

    // public function productimg()
    // {
    //     return $this->hasMeny(ProductImage::class,'product_id','id');
    // }

}
