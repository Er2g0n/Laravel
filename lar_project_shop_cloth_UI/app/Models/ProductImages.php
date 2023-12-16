<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    use HasFactory;
    /**
  * The table associated with the model.
  *
  * @var string
  */
 protected $table = 'product_images';/* tên bảng database mình tạo là products_images */

 /**
  * The attributes that aren't mass assignable.
  *
  * @var array
  */
 protected $guarded = [];
}

