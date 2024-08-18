<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMake extends Model
{
    use HasFactory;

    protected $tableName = 'ta_productmake';

    protected $primaryKey = 'sr';

    protected $fillable = [
        'product_make','product_name'
    ];
}
