<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'ta_products';

    protected $primaryKey = 'sr';

    protected $fillable = [
        'product_name','product_make','product_number','product','productimg','product_details','slug'
    ];
}
