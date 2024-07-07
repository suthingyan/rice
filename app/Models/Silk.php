<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Silk extends Model
{
    use HasFactory;
    protected $fillable = ['silkName','pesticides_id','description'];
}
