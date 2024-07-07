<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rice extends Model
{
    use HasFactory;
    protected $fillable=['category_id','subCategory_id','silk_id','soilCount','acre'];
}
