<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AggregationFunction extends Model
{
    use HasFactory;

    protected $fillable = [
        'affected_column',
        'where_column',
        'groupby_column',
        'user_id', 
    ];
}
