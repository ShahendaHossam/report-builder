<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbConnection extends Model
{
    use HasFactory;

    protected $fillable = [
        'db_type', 
        'host', 
        'username', 
        'password',
        'databases',
        'tables',
    ];
}
