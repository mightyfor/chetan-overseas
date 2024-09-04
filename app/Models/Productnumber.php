<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productnumber extends Model
{
    use HasFactory;

    protected $table = 'ta_productnumber';

    protected $primaryKey = 'sr';

    protected $fillable = [
        'product_name','product_make','product_number'
    ];
}
