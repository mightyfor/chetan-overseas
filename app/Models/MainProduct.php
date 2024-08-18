<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainProduct extends Model
{
    use HasFactory;

    protected $table = 'ta_mainproduct';

    protected $primaryKey = 'sr';

    protected $fillable = [
        'product_name'
    ];
}
